<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(
        private readonly UserPasswordHasherInterface $hasher
    ){

    }

    public function load(ObjectManager $manager): void
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setRoles(['ROLE_ADMIN'])
                    ->setEmail('admin@doe.fr')
                    ->setNom('Durand')
                    ->setPrenom('doe')
                    ->setPassword($this->hasher->hashPassword($utilisateur, 'admin'));
                    $manager->persist($utilisateur);


        $manager->flush();
    }
}
