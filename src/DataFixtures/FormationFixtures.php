<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Section;
use App\Entity\Lesson;
use App\Entity\Annexe;

class FormationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = \Faker\Factory::create('fr_FR');

        // lo'bjectif est de créer 3 fausses formations avec 3 sections par formations et 3 lesson par sections
        for($i =1; $i <= 42; $i++) {
            $formation = new Formation();

            $formation->setTitle($faker->sentence())
                    ->setContent($faker->paragraph(2))
                    ->setImage("https://images.pexels.com/photos/943096/pexels-photo-943096.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
            
            $manager->persist($formation);


            // créer 3 sections par formations
            for($j =1; $j <= mt_rand(2, 5); $j++) {
                $section = new Section();

                $section->setTitle($faker->sentence())
                        ->setFormation($formation);

                $manager->persist($section);


                // créer entre 3 et 5 lesson par sections
                for($k =1; $k <= mt_rand(2, 6); $k++) {
                    $lesson = new Lesson();


                    $lesson->setTitle($faker->sentence())
                        ->setVideo("https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?controls=0")
                        ->setContent($faker->paragraphs(5, true))
                        ->setSection($section);
                    
                    $manager->persist($lesson);
                        for($h =1; $h <= mt_rand(0, 3); $h++) {

                            $annexe = new Annexe();
                            $annexe->setPath('https://fonts.google.com/specimen/Inter?category=Serif,Sans+Serif')
                                    ->setTitle($faker->sentence())
                                    ->setLesson($lesson);

                            $manager->persist($annexe);
                        }
                   
                }
            }
        }

        $manager->flush();
    }
}
