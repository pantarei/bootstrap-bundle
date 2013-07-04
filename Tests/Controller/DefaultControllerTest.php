<?php

namespace Pantarei\Bundle\BootstrapBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');

        $this->assertTrue($crawler->filter('html:contains("Bootstrap")')->count() > 0);
    }
}
