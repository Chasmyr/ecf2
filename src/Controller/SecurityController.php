<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationUserType;
use App\Repository\UserRepository;
use App\Form\RegistrationFormateurType;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    #[Route('/inscription_utilisateur', name: 'security_registration_user')]
    public function registrationUser(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher) {
        $user = new User();

        $form = $this->createForm(RegistrationUserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {   
            $hashedPassword = $hasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registrationUser.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/inscription_formateur', name: 'security_registration_formateur')]
    public function registrationFormateur(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher) {
        $user = new User();

        $form = $this->createForm(RegistrationFormateurType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {   
            $hashedPassword = $hasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $user->setRoles(['ROLE_FORMATEUR']);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registrationFormateur.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/connexion', name: 'security_login')]
    public function login() {
        return $this->render('security/login.html.twig');
    }

    #[Route('/deconnexion', name: 'security_logout')]
    public function logout() {}

    #[Route('/user', name: 'user_acc')]
    public function userShow(FormationRepository $formationRepo) {
        $user = $this->getUser();
        $formationComplete = $user->getFormationComplete();
        $formations = [];
        if($formationComplete != null && $user->getRoles() == ['ROLE_USER']) 
        {
            for ($i=0; $i < count($formationComplete); $i++) {
                $formations[] = $formationRepo->find($formationComplete[$i]);
            }
        } 

        return $this->render('security/userAcc.html.twig', [
            'user' => $user,
            'formations' => $formations
        ]);
    }
    // create admin user without fixtures
    #[Route('/ecoit/admin/create', name: 'user_admin_create')]
    public function userAdminCreate(UserRepository $userRepo, EntityManagerInterface $manager) {
        $userList = $userRepo->findAll();
        $isAdmin = 0;
        for($i=0; $i < count($userList); $i++) {
            if($userList[$i]->getRoles() === ['ROLE_ADMIN']) {
                $isAdmin++;
            }
        }
        if ($isAdmin === 0) {
            $admin = new User();
            $admin->setEmail('admin@ecoit.fr');
            $admin->setUsername('admin');
            $admin->setRoles(['ROLE_ADMIN']);
            $admin->setPassword(password_hash('root88root', PASSWORD_BCRYPT));
            $manager->persist($admin);
            $manager->flush();
            return $this->redirectToRoute('user_admin');
        } else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/admin', name: 'user_admin')]
    public function userAdmin(UserRepository $userRepo) {
        $userList = $userRepo->findAll();
        $userFormateurList = [];
        if ($userList != null)
        {
            for ($i =0; $i < count($userList); $i++)
            {
                if($userList[$i]->getRoles() === ['ROLE_FORMATEUR'] && $userList[$i]->getState() == false) {
                    $userFormateurList[] = $userList[$i];
                }
            }
        }

        return $this->render('security/userList.html.twig', [
            'userList' => $userFormateurList
        ]);
    }

    // valider les formateurs
    #[Route('/admin/validate/{id}', name: 'user_admin_validate')]
    public function userValidate(int $id, UserRepository $userRepo, EntityManagerInterface $manager) {
        $user = $userRepo->find($id);
        $user->setState(true);
        $userList = $userRepo->findAll();
        $userFormateurList = [];
        if ($userList != null)
        {
            for ($i =0; $i < count($userList); $i++)
            {
                if($userList[$i]->getRoles() == ['ROLE_FORMATEUR'] && $userList[$i]->getState() == false) {
                    $userFormateurList[] = $userList[$i];
                }
            }
        }
        $manager->persist($user);
        $manager->flush();
        return $this->redirectToRoute('user_admin', ['userList' => $userFormateurList]);
    }
}
