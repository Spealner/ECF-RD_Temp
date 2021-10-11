<?php

namespace App\Tests;

use App\Entity\ChambreFroide;
use PHPUnit\Framework\TestCase;

class ChambreFroideUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $chambreFroide = new chambreFroide();

        $chambreFroide->setNom('nom')
            ->setSousTitre('sousTitre')
            ->setDescription('description');

        $this->assertTrue($chambreFroide->getNom() === 'nom');
        $this->assertTrue($chambreFroide->getSousTitre() === 'sousTitre');
        $this->assertTrue($chambreFroide->getDescription() === 'description');
    }

    public function testIsFalse()
    {
        $chambreFroide = new chambreFroide();

        $chambreFroide->setNom('nom')
            ->setSousTitre('sousTitre')
            ->setDescription('description');

        $this->assertFalse($chambreFroide->getNom() === 'false');
        $this->assertFalse($chambreFroide->getSousTitre() === 'false');
        $this->assertFalse($chambreFroide->getDescription() === 'false');
    }

    public function testIsEmpty()
    {
        $chambreFroide = new chambreFroide();

        $this->assertEmpty($chambreFroide->getNom());
        $this->assertEmpty($chambreFroide->getSousTitre());
        $this->assertEmpty($chambreFroide->getDescription());
    }
}
