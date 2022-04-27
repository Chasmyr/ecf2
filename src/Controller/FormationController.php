<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Annexe;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Data\SearchData;
use App\Form\AnnexeType;
use App\Form\LessonType;
use App\Form\SearchType;

use App\Entity\Formation;

use App\Form\SectionType;
use App\Form\FormationType;
use App\Entity\LessonComplete;
use App\Repository\FileRepository;
use App\Repository\UserRepository;
use App\Controller\SearchController;
use App\Repository\LessonRepository;
use App\Repository\SectionRepository;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\LessonCompleteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FormationController extends AbstractController
{
    // fonction qui nous renvoie sur la liste des formations
    #[Route('/formation', name: 'app_formation')]
    public function index(FormationRepository $formationRepo, Request $request, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        $data = new SearchData();
        
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);

        $formations = $paginator->paginate(
            array_reverse($formationRepo->findSearch($data)),
            $request->get('page', 1),
            9
        );
        if ($request->isXmlHttpRequest()) {
            return $this->json(['code' => 200,
                'content' => $this->render('formation/_wrapper.html.twig', ['formations' => $formations]),
                'pagination' => $this->render('formation/_pagination.html.twig', ['formations' => $formations])
                ], 200);
        }
        
        return $this->render('formation/index.html.twig', [
            'formations' => $formations,
            'form' => $form->createView()
        ]);
    }

    // créer une nouvelle formation
    #[Route('/create/formation', name: 'create_formation')]
    public function createFormation(Request $request, EntityManagerInterface $manager) {
        $formation = new Formation();
        $user = $this->getUser();
        $formation->setUser($user);
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($formation);
            $manager->flush();
            
            return $this->redirectToRoute('list_formation');
        }
        return $this->render('formation/create.html.twig', [
            'formFormation' => $form->createView()
        ]);
    }
    
    //fonction pour afficher les formations coté instructeur
    #[Route('/create/formation/list', name: 'list_formation')]
    public function formationList(FormationRepository $formationRepository)
    {
        $user = $this->getUser();
        $formationsList = $user->getFormations();

        return $this->render('formation/formationList.html.twig', compact('formationsList')); //cela me renvoie l'id de la formation via la template twig
    }

    // fonction pour editer la formation aka ajouter les sections
    #[Route('/create/formation/edit/{id}', name: 'edit_formation')]
    public function editFormation(int $id, FormationRepository $formationRepository)
    {
        $user = $this->getUser();
        $formation = $formationRepository->find($id);
        $sectionsList = $formation->getSections();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        }
        return $this->render('formation/formationEdit.html.twig', [
            'sectionsList' => $sectionsList,
            'formation' => $formation
        ]);
    }


    //fonction pour créer les sections
    #[Route('/create/formation/{id}/section', name: 'create_section')]
    public function newSection(int $id, FormationRepository $formationRepository, Request $request, EntityManagerInterface $manager)
    {   
        $formation = $formationRepository->find($id);
        $user = $this->getUser();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        } else {
            $section = new Section();
            $section->setFormation($formation);
            $form = $this->createForm(SectionType::class, $section);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()) {

                $manager->persist($section);
                $manager->flush();
                
                return $this->redirectToRoute('edit_formation', ['id' => $formation->getId()]);
            }
        }

        return $this->render('formation/createSection.html.twig', [
            'section' => $section,
            'form' => $form->createView()
        ]);
    }

    // fonction pour editer les sectiosn aka ajouter les lessons
    #[Route('/create/formation/section/edit/{id}', name: 'edit_section')]
    public function editSection(int $id, SectionRepository $sectionRepository)
    {
        $user = $this->getUser();
        $section = $sectionRepository->find($id);
        $formation = $section->getFormation();
        $lessonsList = $section->getLessons();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        }

        return $this->render('formation/sectionEdit.html.twig', [
            'lessonsList' => $lessonsList,
            'section' => $section,
            'formation' => $formation
        ]);
    }
    //fonction pour créer les lessons
    #[Route('/create/formation/{id}/lesson', name: 'create_lesson')]
    public function newLesson(int $id, SectionRepository $sectionRepository, Request $request, EntityManagerInterface $manager)
    {   
        $user = $this->getUser();
        $section = $sectionRepository->find($id);
        $formation = $section->getFormation();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        } else {
            $lesson = new Lesson();
            $lesson->setSection($section);
            $form = $this->createForm(LessonType::class, $lesson);
            $form->handleRequest($request);
    
            if($form->isSubmitted() && $form->isValid()) {
                $manager->persist($lesson);
                $manager->flush();
                return $this->redirectToRoute('edit_section', ['id' => $section->getId()]);
            }  
        }

        return $this->render('formation/createLesson.html.twig', [
            'lesson' => $lesson,
            'form' => $form->createView()
        ]);
    }

    // fonction pour editer les leçons aka ajouter les fichiers
    #[Route('/create/formation/{id}/lesson/edit}', name: 'edit_lesson', methods: 'GET|POST')]
    public function editLesson(int $id, LessonRepository $lessonRepository, Request $request, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $lesson = $lessonRepository->find($id);
        $section = $lesson->getSection();
        $formation = $section->getFormation();
        $annexesList = $lesson->getAnnexes();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        }

        return $this->render('formation/lessonEdit.html.twig', [
            'annexesList' => $annexesList,
            'lesson' => $lesson,
            'section' => $section,
            'formation' => $formation
        ]);
    }

    //fonction pour ajouter une annexe
    #[Route('/create/formation/{id}/annexe', name: 'create_annexe')]
    public function newFile(int $id, LessonRepository $lessonRepository, Request $request, EntityManagerInterface $manager)
    {   
        $user = $this->getUser();
        $lesson = $lessonRepository->find($id);
        $section = $lesson->getSection();
        $formation = $section->getFormation();
        if($user != $formation->getUser())
        {
            return $this->redirectToRoute('home');
        } else {
            $annexe = new Annexe();
            $annexe->setLesson($lesson);
            $form = $this->createForm(AnnexeType::class, $annexe);
            $form->handleRequest($request);
    
            if($form->isSubmitted() && $form->isValid()) {
    
                $manager->persist($annexe);
                $manager->flush();
                
                return $this->redirectToRoute('edit_lesson', ['id' => $lesson->getId()]);
            }
        }

        return $this->render('formation/createAnnexe.html.twig', [
            'form' => $form->createView(),
            'formation' => $formation->getId()
        ]);
    }
    

    // fonction qui permet d'afficher le contenu d'une formation
    #[Route('/formation/{id}', name: 'formation_show')]
    public function show(int $id, FormationRepository $formationRepository)
    {
        $user = $this->getUser();
        $formation = $formationRepository->find($id);
        $lessonList= [];
        for ($i =0; $i < count($formation->getSections()); $i++) {
            $lessonList[] = $formation->getSections()[$i]->getLessons();
        }
        $lessonTotal = [];
        for ($j =0; $j < count($lessonList); $j++) {
            $lessonTotal[] = $lessonList[$j]->getValues();
        }
        $lessonFinal = [];
        for($i=0; $i < count($lessonTotal); $i++) {
            for($m=0; $m < count($lessonTotal[$i]); $m++) {
                $lessonFinal[] = $lessonTotal[$i][$m];
            }
        }
        $lessonFinalId = [];
        for($i=0; $i < count($lessonFinal); $i++) {
            $lessonFinalId[] = $lessonFinal[$i]->getId();
        }
        $userLessonList = [];
        for($l=0; $l < count($user->getLesson()->getValues()); $l++) {
            $userLessonList[] = $user->getLesson()->getValues()[$l]->getId();
        }

        $completeLessons = count($lessonFinalId) - count(array_diff($lessonFinalId, $userLessonList));
            if (count(array_diff($lessonFinalId, $userLessonList)) == 0) {
                $progress = 100;
            } else {
                $progress = $completeLessons * (100/count($lessonFinalId));
            }

        return $this->render('formation/show.html.twig', [
            'formation' => $formation,
            'lessons' => $lessonFinal,
            'progress' => $progress
        ]);
    }

    //fonction qui nous affiche la page d'accueil
    #[Route('/', name: 'home')]
    public function home(UserRepository $userRepo, FormationRepository $formationRepo) {
        $formation = $formationRepo->findAll();
        $formationReverse = array_reverse($formation);
        $formateur = 0;
        $userList = $userRepo->findAll();
        $numberOfCo2 = 0;
        if (!empty($userList)){
            $userIdStart = array_values($userList)[0]->getId();
            for ($i = $userIdStart; $i <= ($userIdStart + count($userList)); $i++) {
                if($userRepo->find($i) != null && $userRepo->find($i)->getState() === true ) {
                    $formateur++;
                }
            }
            for ($j = $userIdStart; $j <= ($userIdStart + count($userList)); $j++) {
                if($userRepo->find($j) != null && $userRepo->find($j)->getRoles() === ['ROLE_USER']) {
                    $numberOfCo2 += count($userRepo->find($j)->getFormationComplete());
                }
            }
        }
        
        $formationCount = count($formation);
        return $this->render('home.html.twig', [
            'formationReverse' => $formationReverse,
            'numberOfFormateur' => $formateur,
            'numberOfFormation' => $formationCount,
            'co2' => $numberOfCo2
        ]);
    }

    //fonction pour terminer une lesson et progress bar
    #[Route('/lesson/{id}', name: 'lesson_complete')]
    public function completeLesson(Lesson $lesson, EntityManagerInterface $manager, LessonRepository $lessonRepo, Request $request): Response {
        $user = $this->getUser();

        $formation = $lessonRepo->find($lesson->getId())->getSection()->getFormation();
        $lessonList= [];
        for ($i =0; $i < count($formation->getSections()); $i++) {
            $lessonList[] = $formation->getSections()[$i]->getLessons();
        }
        $lessonTotal = [];
        for ($j =0; $j < count($lessonList); $j++) {
            $lessonTotal[] = $lessonList[$j]->getValues();
        }
        $lessonFinal = [];
        for($i=0; $i < count($lessonTotal); $i++) {
            for($m=0; $m < count($lessonTotal[$i]); $m++) {
                $lessonFinal[] = $lessonTotal[$i][$m]->getId();
            }
        }
        $userLessonList = [];
        for($l=0; $l < count($user->getLesson()->getValues()); $l++) {
            $userLessonList[] = $user->getLesson()->getValues()[$l]->getId();
        }

        $user->addLesson($lesson);
        $manager->persist($user);
        $manager->flush();
        
        $completeLessons = count($lessonFinal) - count(array_diff($lessonFinal, $userLessonList));
        if (count(array_diff($lessonFinal, $userLessonList)) == 0) {
            $progress = 100;
        } else {
            $progress = ($completeLessons + 1) * (100/count($lessonFinal));
        }
        if ($request->isXmlHttpRequest()) {

            return $this->json(['code' => 200, 
            'message' => 'leçon ajoutée',
            'progress' => $progress], 200);
        }
    }

    // fonction pour terminer une formation
    #[Route('/lesson/validate/{id}', name: 'formation_complete')]
    public function completeFormation(EntityManagerInterface $manager, Lesson $lesson, LessonRepository $lessonRepo) {
        $user = $this->getUser();
        $user->addLesson($lesson);

        $formation = $lessonRepo->find($lesson->getId())->getSection()->getFormation();
        $lessonList= [];
        for ($i =0; $i < count($formation->getSections()); $i++) {
            $lessonList[] = $formation->getSections()[$i]->getLessons();
        }
        $lessonTotal = [];
        for ($j =0; $j < count($lessonList); $j++) {
            $lessonTotal[] = $lessonList[$j]->getValues();
        }
        $lessonFinal = [];
        for($i=0; $i < count($lessonTotal); $i++) {
            for($m=0; $m < count($lessonTotal[$i]); $m++) {
                $lessonFinal[] = $lessonTotal[$i][$m]->getId();
            }
        }

        $userLessonList = [];
        for($l=0; $l < count($user->getLesson()->getValues()); $l++) {
            $userLessonList[] = $user->getLesson()->getValues()[$l]->getId();
        }

        $formationLenght = count($lessonFinal) -1;
        if (array_search($lessonFinal[$formationLenght], $userLessonList) != false) {
            $user->setFormationComplete($formation->getId());
        }

        $manager->persist($user);
        $manager->flush();

        return $this->redirectToRoute('app_formation');
    }
}
