<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SayController extends Controller
{

    /**
     * @Route("/hello", name="_demo_hello")
     * @Template()
     */
    public function helloAction()
    {
        return array();
    }

}
