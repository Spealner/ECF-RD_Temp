<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeFunctionalTest extends WebTestCase
{
    public function testShouldDisplayHomePage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'RD-Temp');
        $this->assertSelectorTextContains('p', 'PME bordelaise spécialisée dans la réfrigération');
    }
}
