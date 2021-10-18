<?php

namespace App\Tests;

use App\Entity\Contact;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function testIsTrue()
    {
        $contact = new Contact();
        $date = new DateTimeImmutable();

        $contact->setNom('nom')
            ->setEmail('test@test.com')
            ->setMessage('message')
            ->setCreatedAt($date);

        $this->assertTrue($contact->getNom() === 'nom');
        $this->assertTrue($contact->getEmail() === 'test@test.com');
        $this->assertTrue($contact->getMessage() === 'message');
        $this->assertTrue($contact->getCreatedAt() === $date);
    }

    public function testIsFalse()
    {
        $contact = new Contact();
        $date = new DateTimeImmutable();

        $contact->setNom('nom')
            ->setEmail('test@test.com')
            ->setMessage('message')
            ->setCreatedAt($date);

        $this->assertFalse($contact->getNom() === 'false');
        $this->assertFalse($contact->getEmail() === 'false@test.com');
        $this->assertFalse($contact->getMessage() === 'false');
        $this->assertFalse($contact->getCreatedAt() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $contact = new Contact();

        $this->assertEmpty($contact->getNom());
        $this->assertEmpty($contact->getEmail());
        $this->assertEmpty($contact->getMessage());
        $this->assertEmpty($contact->getCreatedAt());
    }
}
