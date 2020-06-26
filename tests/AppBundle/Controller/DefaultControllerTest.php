<?php

namespace Tests\AppBundle\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->makeClient();

        $crawler = $client->request('GET', '/login');
        $this->assertStatusCode(200,$client);
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());

    }
}
