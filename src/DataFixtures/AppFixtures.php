<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 1; $i <= 30; $i++) {
            $personne = new Personne();
            $personne->setName("personne-" . $i);
            $personne->setTel(5633220..$i);
            $personne->setEmail("personne".$i."@gmail.com");
            $personne->setAge(20..$i);
            $manager->persist($personne);
        }
        $manager->flush();
    }
}
