<?php

namespace Saro0h\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class BlogControllerTest extends WebTestCase
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
            array('/blog/code'),
            array('/blog/code/kata-translation'),
            array('/blog/code/playground-rabbitmq'),
            array('/blog/code/kata-upload'),
            array('/blog/code/kata-event-listener'),
            array('/blog/code/playground-media-api-bundle'),
            array('/blog/code/playground-cache'),
            array('/blog/read'),
            array('/blog/read/symfony-cache'),
        );
    }
}
