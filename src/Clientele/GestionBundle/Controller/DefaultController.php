<?php

namespace Clientele\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClienteleGestionBundle:Default:index.html.twig');
    }
}
