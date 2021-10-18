<?php

namespace App\Tests;

use App\Entity\ChambreFroide;
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
            ->setVille('ville')
            ->setTelephone('0123456789');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAdresse() === 'adresse');
        $this->assertTrue($user->getVille() === 'ville');
        $this->assertTrue($user->getTelephone() === '0123456789');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setNom('nom')
            ->setPassword('password')
            ->setAdresse('adresse')
            ->setVille('ville')
            ->setTelephone('0123456789');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAdresse() === 'false');
        $this->assertFalse($user->getVille() === 'false');
        $this->assertFalse($user->getTelephone() === '9876543210');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAdresse());
        $this->assertEmpty($user->getVille());
        $this->assertEmpty($user->getId());
        $this->assertEmpty($user->getTelephone());
    }

    public function testAddGetRemoveChambreFroide()
    {
        $user = new User();
        $chambreFroide = new ChambreFroide();

        $this->assertEmpty($user->getChambreFroide());

        $user->addChambreFroide($chambreFroide);
        $this->assertContains($chambreFroide, $user->getChambreFroide());

        $user->removeChambreFroide($chambreFroide);
        $this->assertEmpty($user->getChambreFroide());
    }
}
