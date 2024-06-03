<?php

namespace App\DataFixtures;

use App\Entity\Chambre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ChambreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 1; $i < 18; $i++) {
            $chambre = new Chambre();
            $chambre->setEtage(0);
            $chambre->setBatiment("A");
            $chambre->setNumero($i);
            $chambre->setStatut(false);
            $chambre->setAmenagement(false);
            $manager->persist($chambre);

        }
        for ($i = 1; $i < 18; $i++) {
            $chambre = new Chambre();
            $chambre->setEtage(1);
            $chambre->setBatiment("A");
            $chambre->setNumero(100+$i);
            $chambre->setStatut(false);
            $chambre->setAmenagement(false);
            $manager->persist($chambre);

        }
        for ($i = 1; $i < 18; $i++) {
            $chambre = new Chambre();
            $chambre->setEtage(2);
            $chambre->setBatiment("A");
            $chambre->setNumero(200+$i);
            $chambre->setStatut(false);
            $chambre->setAmenagement(false);
            $manager->persist($chambre);
        }
        $manager->flush();
    }
}
