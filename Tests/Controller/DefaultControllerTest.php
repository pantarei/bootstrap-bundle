<?php

namespace Pantarei\Bundle\BootstrapBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testBoilerplate()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/boilerplate');
        $this->assertTrue($crawler->filter('html:contains("Bootstrap 101 Template")')->count() > 0);
    }

    public function testCarousel()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/carousel');
        $this->assertTrue($crawler->filter('html:contains("Carousel template")')->count() > 0);
    }

    public function testGrid()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/grid');
        $this->assertTrue($crawler->filter('html:contains("Grid template")')->count() > 0);
    }

    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertTrue($crawler->filter('html:contains("Bootstrap")')->count() > 0);
    }

    public function testPage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/page');
        $this->assertTrue($crawler->filter('html:contains("Bootstrap 101 Template")')->count() > 0);
    }

    public function testSignin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/signin');
        $this->assertTrue($crawler->filter('html:contains("Sign in form template")')->count() > 0);
    }

    public function testStarterTemplate()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/starter-template');
        $this->assertTrue($crawler->filter('html:contains("Starter template")')->count() > 0);
    }
}
