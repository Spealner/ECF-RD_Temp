<?php

namespace App\Tests;

use App\Entity\ChambreFroide;
use PHPUnit\Framework\TestCase;

class ChambreFroideUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $chambreFroide = new chambreFroide();

        $chambreFroide->setTitle('title')
            ->setSubtitle('subtitle')
            ->setDescription('description');

        $this->assertTrue($chambreFroide->getTitle() === 'title');
        $this->assertTrue($chambreFroide->getSubtitle() === 'subtitle');
        $this->assertTrue($chambreFroide->getDescription() === 'description');
    }

    public function testIsFalse()
    {
        $chambreFroide = new chambreFroide();

        $chambreFroide->setTitle('title')
            ->setSubtitle('subtitle')
            ->setDescription('description');

        $this->assertFalse($chambreFroide->getTitle() === 'false');
        $this->assertFalse($chambreFroide->getSubtitle() === 'false');
        $this->assertFalse($chambreFroide->getDescription() === 'false');
    }

    public function testIsEmpty()
    {
        $chambreFroide = new chambreFroide();

        $this->assertEmpty($chambreFroide->getTitle());
        $this->assertEmpty($chambreFroide->getSubtitle());
        $this->assertEmpty($chambreFroide->getDescription());
    }
}
