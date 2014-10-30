<?php

namespace Saro0h\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/talks", name="talks")
     * @Template()
     */
    public function talksAction()
    {
        return array();
    }

    /**
     * @Route("/blog/code", name="code")
     * @Template()
     */
    public function codeAction()
    {
        return array();
    }

    /**
     * @Route("/blog/kata-translation", name="kata_translation")
     * @Template()
     */
    public function kataTranslationAction()
    {
        return array();
    }

    /**
     * @Route("/blog/playground-rabbitmq", name="playground_rabbitmq")
     * @Template()
     */
    public function playgroundRabbitMQAction()
    {
        return array();
    }

    /**
     * @Route("/blog/kata-upload", name="kata_upload")
     * @Template()
     */
    public function uploadAction()
    {
        return array();
    }

    /**
     * @Route("/blog/kata-event-listener", name="kata_event_listener")
     * @Template()
     */
    public function eventListenerAction()
    {
        return array();
    }

    /**
     * @Route("/blog/playground-media-api-bundle", name="playground_media_api")
     * @Template()
     */
    public function playgroundMediaAction()
    {
        return array();
    }

    /**
     * @Route("/read", name="read")
     * @Template()
     */
    public function readAction()
    {
        return array();
    }

    /**
     * @Route("/read/symfony-cache", name="symfony_cache")
     * @Template()
     */
    public function symfonyCacheAction()
    {
        return array();
    }

    /**
     * @Route("/read/playground-cache", name="playground_cache")
     * @Template()
     */
    public function playgroundCacheAction()
    {
        return array();
    }
}
