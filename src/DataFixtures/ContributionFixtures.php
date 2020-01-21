<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $amount = new Contribution();
        $amount->setAmout(1200.02);
        $manager->persist($amount);
        $this->addReference("amount", $amount);

        $manager->flush();
    }
}
