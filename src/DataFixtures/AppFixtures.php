<?php

namespace App\DataFixtures;

use App\Entity\ChambreFroide;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
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
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create('fr_FR');

        // Creation d'un fake utilisateur
            $user = new User();

            $user->setEmail('user@test.com')
                ->setNom($faker->lastName())
                ->setAdresse($faker->address())
                ->setVille($faker->city())
                ->setTelephone($faker->phoneNumber())
                ->setRoles(['ROLE_OFFICINE']);

            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);

            $manager->persist($user);


        // Creation de plusieurs fakes ChambreFroides
        for ($i=0; $i < 10; $i++) {
            $chambreFroide = new ChambreFroide();

            $chambreFroide->setTitle($faker->word())
                ->setSubtitle($faker->word())
                ->setDescription($faker->text())
                ->setFile('/img/placeholder.jpg')
                ->setAuthor($faker->word())
                ->setDate($faker->dateTimeBetween('-6 days', '-1 days'));

            $manager->persist($chambreFroide);
        }

        $manager->flush();
    }
}
