<?php

namespace Saro0h\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdminController extends Controller
{
    /**
     * @Route("/admin/", name="shop_admin_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/twitter", name="shop_admin_twitter")
     */
    public function twitterAction()
    {
        $authorizationHeader = $this->get('twitter.manager')->getAuthorizationHeader();
        $request = $this->get('api.twitter.client')->post('/oauth/request_token', array('Authorization' => $authorizationHeader));

        $response = $request->send();

        $info = $response->getBody('true');

        var_dump($info);

        die;

        return $this->redirect('https://api.twitter.com/oauth/authenticate?'.$info);

        var_dump($response->getBody('true')); die;

    }
}
