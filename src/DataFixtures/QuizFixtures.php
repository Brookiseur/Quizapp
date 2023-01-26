<?php

namespace App\DataFixtures;

use App\Entity\Quiz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuizFixtures extends Fixture
{

    // ======================================== //
    // ============= PROPRIETES =============== //
    // ======================================== //
    const QUIZ_REFERENCE_1 = 'quiz';
    const QUIZ_REFERENCE_2 = 'quiz2';

    // ======================================== //
    // ============= METHODES =============== //
    // ======================================== //

    public function load(ObjectManager $manager): void
    {
        $quiz1 = new Quiz();
        $quiz1->setName('Mario');
        $manager->persist($quiz1);
        $this->addReference(self::QUIZ_REFERENCE_1, $quiz1);

        $quiz2 = new Quiz();
        $quiz2->setName('Animaux');
        $manager->persist($quiz2);
        $this->addReference(self::QUIZ_REFERENCE_2, $quiz2);


        $manager->flush();
    }
}
