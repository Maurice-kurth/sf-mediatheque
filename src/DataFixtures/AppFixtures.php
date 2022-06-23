<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;
use App\Entity\Artistes;
use App\Entity\Livres;
use App\Entity\Evenements;
use App\Entity\DataFixtures;
use DateInterval;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $om)
    {
        $faker = FakerFactory::create("en_US");

        for ($i = 0; $i < 20; $i++) {
            $artiste = new Artistes();
            $artiste->setNom($faker->name());
            $om->persist($artiste);

            $livre = new Livres();
            $livre->setNom($faker->catchPhrase());
            $livre->setType("livre");
            $livre->setSupport($faker->randomElement(['digital','physique']));
            $livre->setEtat($faker->randomElement(['bon','excellent','mauvais état']));
            $livre->setFragile($faker->boolean());
            $livre->setAuteur($artiste);
            $livre->setIsbn($faker->randomNumber(5, true));
            $om->persist($livre);
        }

        for ($i = 0; $i < 50; $i++) {

            $evenement = new Evenements();
            $evenement->setTitre($faker->bs());
            $dateDebut = $faker->dateTimeBetween('now', '+4 months');
            $evenement->setDate($dateDebut);
            $dateFin = $faker->dateTimeBetween($dateDebut,$dateDebut->add(new DateInterval('P2M')));
            $evenement->setDateFin($dateFin);
            $evenement->setStatut($faker->randomElement(['en cours','terminé','annulé','en proposition']));
            $evenement->setDescription($faker->text());
            $om->persist($evenement);
        }


        $om->flush();
    }
}
