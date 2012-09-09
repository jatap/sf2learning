<?php

namespace Jat\ExtranetBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/extranet');

        $this->assertTrue(
            $crawler->filter('html:contains("Extranet")')->count() > 0
        );
    }
}
