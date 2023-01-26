<?php

namespace App\DataFixtures;

use App\Entity\Reponse;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ReponseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        // ========================================================//
         // ================== MARIO ============================== //
         //======================================================== //

        // ~~~~~~~~~~~ REPONSE QUESTION 1 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('1995');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_1));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('1985');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_1));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('1990');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_1));
        $manager->persist($reponse);

        // ~~~~~~~~~~~ REPONSE QUESTION 2 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Bowser');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Donkey Kong');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Wario');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 3 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Peach');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Zelda');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Daisy');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 4 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Luigi');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Jr.');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario II');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 5 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Super Mario Bros.');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Kart');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Party');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 6 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Peach');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Rosalina');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Daisy');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 7 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Yoshi');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_7));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Toad');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_7));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Bowser Jr.');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_7));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 8 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Mushroom Kingdom');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_8));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Land');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_8));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Yoshi Island');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_8));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 9 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Goomba');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_9));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Koopa');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_9));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Dry Bones');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_9));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 10 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Super Mario');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_10));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Adventure');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_10));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario World');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_10));
        $manager->persist($reponse);

        // =========================================================//
        // ================== ANIMAUX ============================== //
        // ======================================================= //

        $reponse = new Reponse();
        $reponse->setTexte('La baleine bleue');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_11));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('1985');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_11));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('1990');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_11));
        $manager->persist($reponse);

        // ~~~~~~~~~~~ REPONSE QUESTION 2 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Le vautour fauve');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_12));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Donkey Kong');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_12));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Wario');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_12));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 3 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Peregrine falcon');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_13));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Zelda');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_13));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Daisy');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_13));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 4 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('La tortue de mer de l\'espèce Aldabrachelys gigantea. ');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_14));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Jr.');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_14));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario II');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_14));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 5 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Le grand cachalot');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_15));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Kart');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_15));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Party');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_15));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 6 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('L\'octopus');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_16));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Rosalina');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_16));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Daisy');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_16));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 7 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('La grenouille de l\'espèce Rana Rugulosa qui peut se reproduire par parthénogenèse');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_17));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Toad');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_17));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Bowser Jr.');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_17));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 8 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('L\'étoile de mer de l\'espèce Asterias rubens');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_18));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Land');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_18));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Yoshi Island');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_18));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 9 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Le dauphin');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_19));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Koopa');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_19));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Dry Bones');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_19));
        $manager->persist($reponse);
        // ~~~~~~~~~~~ REPONSE QUESTION 10 ~~~~~~~~ //
        $reponse = new Reponse();
        $reponse->setTexte('Probablement le tardigrade, un organisme microscopique qui peut survivre à des températures extrêmes, à la radiation et à des conditions de déshydratation');
        $reponse->setStatus(true);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_20));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario Adventure');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_20));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse->setTexte('Mario World');
        $reponse->setStatus(false);
        $reponse->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_20));
        $manager->persist($reponse);

        $manager->flush();
    }
    public function getDependencies()
    {
        return array(
            QuestionFixtures::class,
        );
    }
}
