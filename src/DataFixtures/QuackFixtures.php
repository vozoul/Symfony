<?php

namespace App\DataFixtures;

use App\Entity\Quack;
use \DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\Tests\Compiler\D;

class QuackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i <= 15; $i++){
            $quack = new Quack();
            $quack->setContent("QuackMaster say : $i")
                ->setCreatedAt(new DateTime());
            $manager->persist($quack);
        }

        $manager->flush();
    }
}
