<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/utilisateur")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
}
