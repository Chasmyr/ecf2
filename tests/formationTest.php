<?php

use App\Entity\User;
use App\Entity\Annexe;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Entity\Formation;
use PHPUnit\Framework\TestCase;


class testList extends TestCase
{

    
    public function testIfNewFormateurWorks(): void 
    {
        $user = new User();
        $user->setEmail("formateur@test.fr");
        $user->setUsername("Formateur1");
        $user->setPassword("formateur10");
        $user->setRoles(['ROLE_FORMATEUR']);
        $user->setState(true);
        $this->assertSame("formateur@test.fr", $user->getEmail());
        $this->assertSame(['ROLE_FORMATEUR'], $user->getRoles());
        $this->assertSame(true, $user->getState());
    }

    public function testIfCreateFormationWorks()
    {
        $formation = new Formation();
        $formation->setTitle("Titre de la formation de test");
        $formation->setContent("content formation de test");
        $formation->setImage("https://images.pexels.com/photos/2468056/pexels-photo-2468056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
        $this->assertSame("Titre de la formation de test", $formation->getTitle());
        $this->assertSame("content formation de test", $formation->getContent());
        $this->assertSame("https://images.pexels.com/photos/2468056/pexels-photo-2468056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260", $formation->getImage());
    } 

    public function testIfCreateSectionWorks()
    {
        $section = new Section();
        $section->setTitle("Titre de la section de test");
        $this->assertSame("Titre de la section de test", $section->getTitle());
    }

    public function testIfCreateLessonWorks()
    {
        $lesson = new Lesson();
        $lesson->setVideo("https://youtu.be/q0HbDiScaRM");
        $lesson->setContent("Contenu de la lesson de test");
        $lesson->setTitle("titre de la lesson de test");
        $this->assertSame("https://youtu.be/q0HbDiScaRM", $lesson->getVideo());
        $this->assertSame("Contenu de la lesson de test", $lesson->getContent());
        $this->assertSame("titre de la lesson de test", $lesson->getTitle());
    }

    public function testIfCreateAnnexeWorks()
    {
        $annexe = new Annexe();
        $annexe->setTitle("annexe 1");
        $annexe->setPath("https://music.youtube.com/watch?v=AirWJtmT3dg&list=RDAMVMDr7UccPpF5w");
        $this->assertSame("annexe 1", $annexe->getTitle());
    }
}