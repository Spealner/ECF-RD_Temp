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
            ->setDescription('description')
            ->setAuthor('author');


        $this->assertTrue($chambreFroide->getTitle() === 'title');
        $this->assertTrue($chambreFroide->getSubtitle() === 'subtitle');
        $this->assertTrue($chambreFroide->getDescription() === 'description');
        $this->assertTrue($chambreFroide->getAuthor() === 'author');
    }

    public function testIsFalse()
    {
        $chambreFroide = new chambreFroide();

        $chambreFroide->setTitle('title')
            ->setSubtitle('subtitle')
            ->setDescription('description')
            ->setAuthor('author');

        $this->assertFalse($chambreFroide->getTitle() === 'false');
        $this->assertFalse($chambreFroide->getSubtitle() === 'false');
        $this->assertFalse($chambreFroide->getDescription() === 'false');
        $this->assertFalse($chambreFroide->getAuthor() === 'false');
    }

    public function testIsEmpty()
    {
        $chambreFroide = new chambreFroide();

        $this->assertEmpty($chambreFroide->getTitle());
        $this->assertEmpty($chambreFroide->getSubtitle());
        $this->assertEmpty($chambreFroide->getDescription());
        $this->assertEmpty($chambreFroide->getAuthor());
    }
}
