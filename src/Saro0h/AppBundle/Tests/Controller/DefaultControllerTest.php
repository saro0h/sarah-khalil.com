<?php

namespace Saro0h\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    /**
     * @dataProvider allRoutes
     */
    public function testPage($route)
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $route);

        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    public function allRoutes()
    {
        return array(
            array('/'),
            array('/talks'),
        );
    }
}
