<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * UserFixtures constructor
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $admin = new User();
        $admin->setFirstname("John");
        $admin->setLastname("Doe");
        $admin->setEmail('admin@gmail.com');
        $admin->setPassword($this->encoder->encodePassword($admin, 'admin'));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference("user-name", $admin);

        $marie = new User();
        $marie->setFirstname("Marie");
        $marie->setLastname("Peterson");
        $marie->setEmail('mp@gmail.com');
        $marie->setPassword($this->encoder->encodePassword($marie, 'marie'));
        $marie->setRoles(["ROLE_USER"]);
        $manager->persist($marie);
        $this->addReference("Marie", $marie);





        $manager->flush();
    }
}
