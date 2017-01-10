<?php

namespace Couture\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParametrageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoutureGestionBundle:Parametrage:index.html.twig');
    }
}
