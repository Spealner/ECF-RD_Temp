<?php

namespace App\DataFixtures;

use App\Entity\ChambreFroide;
use App\Entity\Roles;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @codeCoverageIgnore
 */
class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
        {
            $this->encoder = $encoder;
        }
    public function load(ObjectManager $manager)
    {
        // Utilisation de Faker
        $faker = Factory::create('fr_FR');

        // Creation d'un fake utilisateur
        for ($j=0; $j < 10; $j++) {
            $user = new User();

            $user->setEmail($faker->email())
                 ->setNom($faker->lastName())
                 ->setAdresse($faker->address())
                 ->setVille($faker->city())
                 ->setTelephone($faker->phoneNumber());

            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);

            $manager->persist($user);
        }

        // Creation de plusieurs fakes ChambreFroides
        for ($i=0; $i < 10; $i++) {
            $chambreFroide = new ChambreFroide();

            $chambreFroide->setTitle($faker->word())
                          ->setSubtitle($faker->word())
                          ->setDescription($faker->text())
                          ->setFile('/img/placeholder.jpg')
                          ->setDate($faker->dateTimeBetween('-6 days', '-1 days'))
                          ->setUser($user);

            $manager->persist($chambreFroide);
        }

        $manager->flush();
    }
}
