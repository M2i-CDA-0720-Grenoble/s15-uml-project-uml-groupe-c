<?php

namespace App\DataFixtures;

use faker;
use Faker\Factory;
use App\Entity\User;
use App\Entity\UserInfo;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {  
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $generator = \Faker\Factory::create("fr_FR");
        for($i=0;$i < 20 ; $i++)
        {
            $user = new User();
            $password = $this->encoder->encodePassword($user, 'password');
            $user
                ->setEmail($generator->email)
                ->setPassword($password);
            $manager->persist($user);

            $userInfo = new UserInfo();
            $userInfo
                ->setuser($user)
                ->setFirstName($generator->firstName)
                ->setLastName($generator->lastName)
                ->setAge($generator->numberBetween($min = 15, $max = 80));
            $manager->persist($userInfo);
        }
        $manager->flush();
    }
}
