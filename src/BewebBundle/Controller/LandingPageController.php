<?php

namespace BewebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LandingPageController extends Controller
{
    /**
     * @Route("/" , name="homepage")
     */
    public function indexAction()
    {
        return $this->render('BewebBundle:Default:index.html.twig');
    }
}
