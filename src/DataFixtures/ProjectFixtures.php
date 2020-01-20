<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $goodGirl = new Project();
        $goodGirl->setName("Good Girl");
        $goodGirl->setImage("project1.jpg");
        $goodGirl->setExcerpt("Ce film parle de ...");
        $goodGirl->setDescription("Ce film parle de trucs très sympa entre copines partant à l'avanture!!!!");
        $goodGirl->setGoal(20000.00);
        $manager->persist($goodGirl);

        $lesyeuxDansLeBus = new Project();
        $lesyeuxDansLeBus->setName("Les yeux dans le bus");
        $lesyeuxDansLeBus->setImage("placeholder.jpg");
        $lesyeuxDansLeBus->setExcerpt("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $lesyeuxDansLeBus->setDescription("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010. Un truc de dingue");
        $lesyeuxDansLeBus->setGoal(15952.25);
        $manager->persist($lesyeuxDansLeBus);

        $dabado = new Project();
        $dabado->setName("Dabado");
        $dabado->setImage("project3.jpg");
        $dabado->setExcerpt("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $dabado->setDescription("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires ! et cultivez pleins de carottes");
        $dabado->setGoal(500000.01);
        $manager->persist($dabado);

        $doosh = new Project();
        $doosh->setName("DOOSH");
        $doosh->setImage("project4.jpg");
        $doosh->setExcerpt("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $doosh->setDescription("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !, avec des pompes sur la face et d'autre trucs cool :)");
        $doosh->setGoal(1452359.21);
        $manager->persist($doosh);

        $manager->flush();
    }

}
