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
     * @Route("/code", name="code")
     * @Template()
     */
    public function codeAction()
    {
        return array();
    }

    /**
     * @Route("/kata-translation", name="kata_translation")
     * @Template()
     */
    public function kataTranslationAction()
    {
        return array();
    }

    /**
     * @Route("/playground-rabbitmq", name="playground_rabbitmq")
     * @Template()
     */
    public function playgroundRabbitMQAction()
    {
        return array();
    }

    /**
     * @Route("/kata-upload", name="kata_upload")
     * @Template()
     */
    public function uploadAction()
    {
        return array();
    }

    /**
     * @Route("/kata-event-listener", name="kata_event_listener")
     * @Template()
     */
    public function eventListenerAction()
    {
        return array();
    }

    /**
     * @Route("/playground-media-api-bundle", name="playground_media_api")
     * @Template()
     */
    public function playgroundMediaAction()
    {
        return array();
    }
}
