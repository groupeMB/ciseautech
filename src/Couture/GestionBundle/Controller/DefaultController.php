<?php

namespace Couture\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoutureGestionBundle:Default:index.html.twig');
    }
}
