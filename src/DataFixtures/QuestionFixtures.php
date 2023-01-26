<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    // ======================================== //
    // ============= PROPRIETES =============== //
    // ======================================== //
    const QUESTION_REFERENCE_1 = 'question1';
    const QUESTION_REFERENCE_2 = 'question2';
    const QUESTION_REFERENCE_3 = 'question3';
    const QUESTION_REFERENCE_4 = 'question4';
    const QUESTION_REFERENCE_5 = 'question5';
    const QUESTION_REFERENCE_6 = 'question6';
    const QUESTION_REFERENCE_7 = 'question7';
    const QUESTION_REFERENCE_8 = 'question8';
    const QUESTION_REFERENCE_9 = 'question9';
    const QUESTION_REFERENCE_10 = 'question10';
    const QUESTION_REFERENCE_11 = 'question11';
    const QUESTION_REFERENCE_12 = 'question12';
    const QUESTION_REFERENCE_13 = 'question13';
    const QUESTION_REFERENCE_14 = 'question14';
    const QUESTION_REFERENCE_15 = 'question15';
    const QUESTION_REFERENCE_16 = 'question16';
    const QUESTION_REFERENCE_17 = 'question17';
    const QUESTION_REFERENCE_18 = 'question18';
    const QUESTION_REFERENCE_19 = 'question19';
    const QUESTION_REFERENCE_20 = 'question20';

     // ======================================== //
    // ============= METHODES =============== //
    // ======================================== //
    public function load(ObjectManager $manager): void
    {
        // ========================================================//
         // ================== MARIO ============================== //
         //======================================================== //
        
        $question1 = new Question();
        $question1->setEntitled('Dans quelle année a été lancé le premier jeu de la série Mario ?');
        $question1->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question1);
        $this->addReference(self::QUESTION_REFERENCE_1, $question1);

        $question2 = new Question();
        $question2->setEntitled('Qui est le principal antagoniste de Mario dans la série de jeux ?');
        $question2->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question2);
        $this->addReference(self::QUESTION_REFERENCE_2, $question2);

        $question3 = new Question();
        $question3->setEntitled('Quelle est la princesse que Mario doit sauver dans la plupart des jeux ?');
        $question3->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question3);
        $this->addReference(self::QUESTION_REFERENCE_3, $question3);

        $question4 = new Question();
        $question4->setEntitled('Quel est le nom du frère de Mario ?');
        $question4->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question4);
        $this->addReference(self::QUESTION_REFERENCE_4, $question4);

        $question5 = new Question();
        $question5->setEntitled('Dans quel jeu Mario a-t-il été introduit pour la première fois ?');
        $question5->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question5);
        $this->addReference(self::QUESTION_REFERENCE_5, $question5);

        $question6 = new Question();
        $question6->setEntitled('Quel est le nom de la petite amie de Mario ?');
        $question6->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question6);
        $this->addReference(self::QUESTION_REFERENCE_6, $question6);

        $question7 = new Question();
        $question7->setEntitled('Quel est le nom de l\'ami de Mario qui l\'accompagne dans plusieurs jeux ?');
        $question7->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question7);
        $this->addReference(self::QUESTION_REFERENCE_7, $question7);

        $question8 = new Question();
        $question8->setEntitled('Quel est le nom de la ville natale de Mario ?');
        $question8->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question8);
        $this->addReference(self::QUESTION_REFERENCE_8, $question8);

        $question9 = new Question();
        $question9->setEntitled('Quel est le nom de l\'ennemi le plus populaire de Mario ?');
        $question9->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question9);
        $this->addReference(self::QUESTION_REFERENCE_9, $question9);

        $question10 = new Question();
        $question10->setEntitled('Quel est le nom de la principale série de Mario ?');
        $question10->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_1));
        $manager->persist($question10);
        $this->addReference(self::QUESTION_REFERENCE_10, $question10);

        // =========================================================//
        // ================== ANIMAUX ============================== //
        // ======================================================= //

        $question11 = new Question();
        $question11->setEntitled('Quel est le plus grand animal vivant sur terre ?');
        $question11->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question11);
        $this->addReference(self::QUESTION_REFERENCE_11, $question11);

        $question12 = new Question();
        $question12->setEntitled('Quel est l\'animal qui peut voler en utilisant des courants thermiques?');
        $question12->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question12);
        $this->addReference(self::QUESTION_REFERENCE_12, $question12);

        $question13 = new Question();
        $question13->setEntitled('Quelle est la plus grande vitesse atteinte par un animal ?');
        $question13->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question13);
        $this->addReference(self::QUESTION_REFERENCE_13, $question13);

        $question14 = new Question();
        $question14->setEntitled('Quel est l\'animal qui peut vivre le plus longtemps ?');
        $question14->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question14);
        $this->addReference(self::QUESTION_REFERENCE_14, $question14);

        $question15 = new Question();
        $question15->setEntitled('Quel est l\'animal qui peut plonger le plus profondément dans l\'eau?');
        $question15->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question15);
        $this->addReference(self::QUESTION_REFERENCE_15, $question15);

        $question16 = new Question();
        $question16->setEntitled('Quel animal est capable de changer de couleur pour se camoufler ?');
        $question16->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question16);
        $this->addReference(self::QUESTION_REFERENCE_16, $question16);

        $question17 = new Question();
        $question17->setEntitled('Quel est l\'animal qui peut se reproduire sans accouplement ?');
        $question17->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question17);
        $this->addReference(self::QUESTION_REFERENCE_17, $question17);

        $question18 = new Question();
        $question18->setEntitled('Quel est l\'animal qui est capable de se régénérer ?');
        $question18->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question18);
        $this->addReference(self::QUESTION_REFERENCE_18, $question18);

        $question19 = new Question();
        $question19->setEntitled('Quel est l\'animal qui est capable de communiquer avec des sons à hautes fréquences inaudibles pour les humains ?');
        $question19->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question19);
        $this->addReference(self::QUESTION_REFERENCE_19, $question19);

        $question20 = new Question();
        $question20->setEntitled('Quel est l\'animal qui peut vivre dans les conditions les plus extrêmes (températures, pressions, etc.) ?');
        $question20->setQuiz($this->getReference(QuizFixtures::QUIZ_REFERENCE_2));
        $manager->persist($question20);
        $this->addReference(self::QUESTION_REFERENCE_20, $question20);

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            QuizFixtures::class,
        ];
    }
}
