<?php

namespace Saro0h\ShopBundle\Security;

use Lyrixx\Twitter\Twitter;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TwitterManager
{
    private $router;

    private $consumerKey;

    private $consumerSecret;

    private $accessToken;

    private $accessTokenSecret;

    public function __construct(Router $router, $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret)
    {
        $this->router = $router;
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->accessToken = $accessToken;
        $this->accessTokenSecret = $accessTokenSecret;
    }

    public function getAuthorizationHeader()
    {
        $twitter = new Twitter($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);

        $callbackUrl = $this->router->generate('shop_admin_index', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        // Fetch yours last tweets
        $response = $twitter->query('POST', '/oauth/request_token');
        $tweets = json_decode($response->getBody(), true);

        var_dump($tweets); die;
    }
}
