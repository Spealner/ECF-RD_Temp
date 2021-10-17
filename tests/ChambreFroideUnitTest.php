<?php

namespace App\Tests;

use App\Entity\ChambreFroide;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class ChambreFroideUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $chambreFroide = new chambreFroide();
        $user = new User();

        $chambreFroide->setTitle('title')
            ->setSubtitle('subtitle')
            ->setDescription('description')
            ->setUser($user);


        $this->assertTrue($chambreFroide->getTitle() === 'title');
        $this->assertTrue($chambreFroide->getSubtitle() === 'subtitle');
        $this->assertTrue($chambreFroide->getDescription() === 'description');
        $this->assertTrue($chambreFroide->getUser() === $user);
    }

    public function testIsFalse()
    {
        $chambreFroide = new chambreFroide();
        $user = new User();

        $chambreFroide->setTitle('title')
            ->setSubtitle('subtitle')
            ->setDescription('description')
            ->setUser($user);

        $this->assertFalse($chambreFroide->getTitle() === 'false');
        $this->assertFalse($chambreFroide->getSubtitle() === 'false');
        $this->assertFalse($chambreFroide->getDescription() === 'false');
        $this->assertFalse($chambreFroide->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $chambreFroide = new chambreFroide();

        $this->assertEmpty($chambreFroide->getTitle());
        $this->assertEmpty($chambreFroide->getSubtitle());
        $this->assertEmpty($chambreFroide->getDescription());
        $this->assertEmpty($chambreFroide->getUser());
    }
}
