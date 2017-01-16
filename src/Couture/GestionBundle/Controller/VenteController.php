<?php

namespace Couture\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VenteController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoutureGestionBundle:Vente:index.html.twig');
    }
}
