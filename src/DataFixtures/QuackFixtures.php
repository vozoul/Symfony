<?php

namespace App\DataFixtures;

use App\Entity\Quack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i <= 15; $i++){
            $quack = new Quack();
        }

        $manager->flush();
    }
}
