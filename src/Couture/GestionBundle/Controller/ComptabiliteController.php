<?php

namespace Couture\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComptabiliteController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoutureGestionBundle:Comptabilite:index.html.twig');
    }
}
