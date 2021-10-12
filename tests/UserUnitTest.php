<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setNom('nom')
            ->setPassword('password')
            ->setAdresse('adresse')
            ->setVille('ville');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAdresse() === 'adresse');
        $this->assertTrue($user->getVille() === 'ville');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('flase@test.com')
            ->setNom('nom')
            ->setPassword('password')
            ->setAdresse('adresse')
            ->setVille('ville');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAdresse() === 'false');
        $this->assertFalse($user->getVille() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAdresse());
        $this->assertEmpty($user->getVille());
    }
}
