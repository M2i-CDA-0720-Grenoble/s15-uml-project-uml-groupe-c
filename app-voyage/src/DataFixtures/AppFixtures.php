<?php

namespace App\DataFixtures;

use faker;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Voyage;
use App\Entity\UserInfo;
use App\Entity\Transport;
use App\Entity\Hebergement;
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
        var_dump($generator);
        for($i=0;$i < 20 ; $i++)
        {
            $user = new User();
            $password = $this->encoder->encodePassword($user, 'password'.$i.$i);
            $user
                ->setEmail($generator->email)
                ->setPassword($password)
                ->setIsVerified(true);
            $manager->persist($user);

            $userInfo = new UserInfo();
            $userInfo
                ->setuser($user)
                ->setFirstName($generator->firstName)
                ->setLastName($generator->lastName)
                ->setAge($generator->numberBetween($min = 15, $max = 80));
            $manager->persist($userInfo);
            
            $hebergement = new Hebergement();
            $hebergement
                    ->setType($generator->numberBetween($min = 1, $max = 3))
                    ->setChambre($generator->randomElement(['simple','double']))
                    ->setDescription($generator->text)
                    ->setQuantite($generator->numberBetween($min = 0, $max = 20));
            $manager->persist($hebergement);

    
            $transport = new Transport();
            $transport
                    ->setType($generator->numberBetween($min = 1, $max = 3))
                    ->setName($generator->companySuffix)
                    ->setQuantite($generator->numberBetween($min = 0, $max = 20));
            $manager->persist($transport);

            $voyage = new Voyage();
            $voyage
                    ->setPrix($generator->numberBetween($min = 150, $max = 1500))
                    ->setDateDebut($generator->dateTimeBetween($startDate = 'now', $endDate = '+4 years', $timezone = null))
                    ->setDuree($generator->numberBetween($min = 4, $max = 15))
                    ->setDescription($generator->text)
                    ->setImage($generator->imageUrl($width=640, $height=480, $randomize = true, $word = null, $gray = false))
                    ->setVille($generator->city)
                    ->setHebergement($hebergement)
                    ->setTransport($transport);
            $manager->persist($voyage);
                   

        }
        $manager->flush();
    }
}
