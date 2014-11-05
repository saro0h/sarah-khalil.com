<?php

namespace Saro0h\ShopBundle\Security;

use Saro0h\ShopBundle\Security\User;
use Guzzle\Service\Client;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;

class TwitterProvider implements UserProviderInterface
{
    private $client;
    private $logger;

    public function __construct(Client $client, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->logger = $logger;
    }

    public function loadUserByUsername($accessToken)
    {
        die('TwitterProvider::loadUserByUsername');
        $guzzleRequest = $this->client->get('/user?access_token='.$accessToken);

        $response = $guzzleRequest->send();
        $data = $response->json();

        $user = new User();
        $user->createFrom($data);

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        return $user;
    }

    public function supportsClass($class)
    {
        return 'Saro0h\OauthBundle\Model\User' === $class;
    }
}
