<?php

namespace Couture\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Couture\GestionBundle\Entity\Client;
use Couture\GestionBundle\Entity\Mesure;
use Couture\GestionBundle\Entity\Modele;
use Couture\GestionBundle\Entity\Commande;
use Couture\GestionBundle\Entity\CommandeProduit;
use Couture\GestionBundle\Form\ClientType as ClientType;
use Couture\GestionBundle\Form\MesureHommeType as MesureHommeType;
use Couture\GestionBundle\Form\MesureFemmeType as MesureFemmeType;
use Couture\GestionBundle\Form\ModeleType as ModeleType;
use Couture\GestionBundle\Form\CommandeNCType as CommandeNCType;
use Couture\GestionBundle\Form\CommandePCType as CommandePCType;
use Couture\GestionBundle\Form\CommandeProduitType as CommandeProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;


class CoutureController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoutureGestionBundle:Couture:index.html.twig');
    }

    public function addClientAction(Request $request)
    {
    	$client = new Client();
        $modele = new ClientType();
        $form = $this->get('form.factory')->create($modele, $client);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Client')->findAll());
            $id = "cl".($count+3);
            $client->setIdentifiant($id);
            $em->persist($client);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
        }
        return $this->render('CoutureGestionBundle:Couture:addClient.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function listClientAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findAll();
        $client = array_reverse($client);
        return $this->render('CoutureGestionBundle:Couture:listClient.html.twig', array(
            'client' => $client
            ));
    }

    public function removeClientAction($identifiant)
    {
            try
            {
                $db = new \PDO('mysql:host=127.0.0.1;dbname=ciseautech', 'root', '');
            }
            catch(PDOException $exception)
            {
                die("Unable to open database.<br />Error message:<br /><br />$exception.");
            }
            $query = "DELETE FROM client WHERE identifiant = '".$identifiant."'";
            $stat = $db->prepare($query);
            $stat->execute();
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
    }

    public function mesureClientAction(Request $request, $identifiant)
    {
        $mesure = new Mesure();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findBy(array('identifiant' => $identifiant));
        if($client[0]->getSexe() == 'M')
        {
            $donnees = new MesureHommeType();
            $form = $this->get('form.factory')->create($donnees, $mesure);  
        }
        else
        {
            $donnees = new MesureFemmeType();
            $form = $this->get('form.factory')->create($donnees, $mesure);
        }
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $mesure->setIdentifiant($identifiant);
            $em->persist($mesure);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
        }
        if($client[0]->getSexe() == 'M')
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientHomme.html.twig', array(
            'form' => $form->createView(), 'client' => $client[0]
            ));   
        }
        else
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientFemme.html.twig', array(
            'form' => $form->createView(), 'client' => $client[0]
            ));
        }
    }

    public function afficherClientAction($identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findBy(array('identifiant' => $identifiant));
        $mesure = $em->getRepository('CoutureGestionBundle:Mesure')->findBy(array('identifiant' => $identifiant));
        if (count($mesure) == 1) {
            $mesure = $mesure[0];
        }
        else
        {
            $mesure = new Mesure();
        }
        return $this->render('CoutureGestionBundle:Couture:afficherClient.html.twig', array(
            'client' => $client[0], 'mesure' => $mesure
        ));
    }

    public function listModeleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('CoutureGestionBundle:Modele')->findAll();
        $modele = array_reverse($modele);
        return $this->render('CoutureGestionBundle:Couture:listModele.html.twig', array(
            'modele' => $modele
            ));
    }

    public function addModeleAction(Request $request)
    {
        $modele = new Modele();
        $modeleForm = new ModeleType();

        $form = $this->get('form.factory')->create($modeleForm, $modele);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Modele')->findAll());
            $id = "mdl".($count+1);
            $modele->setReference($id);
            $em->persist($modele);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_modele'));
        }
        return $this->render('CoutureGestionBundle:Couture:addModele.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function updateDataAction(Request $request, $id, $data, $table, $colonne)
    {
        $em = $this->getDoctrine()->getManager();
        $enregistrement = $em->getRepository('CoutureGestionBundle:'.$table)->findOneBy(array(
            'reference' => $id));
        $enregistrement->$colonne($data);
        $em->persist($enregistrement);
        $em->flush();
        return true;
    }

    public function listCommandeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('CoutureGestionBundle:Commande')->findAll();
        $commande = array_reverse($commande);
        return $this->render('CoutureGestionBundle:Couture:listCommande.html.twig', array(
            'commande' => $commande
            ));
    }

    public function addCommandeAction(Request $request)
    {
        return $this->render('CoutureGestionBundle:Couture:addCommande.html.twig');
    }

    public function formulaireNCCommandeAction(Request $request)
    {
        $commande = new Commande();
        $modeleForm = new CommandeNCType();

        $form = $this->get('form.factory')->create($modeleForm, $commande);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Commande')->findAll());
            $id = "com".($count+1);
            $commande->setReference($id);
            $commande->setDateCommande(new \Datetime());
            $commande->setLivraison(false);
            $em->persist($commande);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array('count' => $commande->getNbModele(),'commande' => $commande->getReference())));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function formulairePCCommandeAction(Request $request)
    {
        $commande = new Commande();
        $modeleForm = new CommandePCType();
        $form = $this->get('form.factory')->create($modeleForm, $commande);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Commande')->findAll());
            $id = "com".($count+1);
            $commande->setReference($id);
            $commande->setDateCommande(new \Datetime());
            $commande->setLivraison(false);
            $em->persist($commande);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array('count' => $commande->getNbModele(),'commande' => $commande->getReference())));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireCommandePC.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function clientAutocompleteAction(Request $request)
    {
        $q = $request->query->get('idClient');
        $results = $this->getDoctrine()->getRepository('CoutureGestionBundle:Client')->findLikeName($q);
        var_dump($results);
        return $this->render('CoutureGestionBundle:Couture:autocompleteClient.html.twig', ['results' => $results]);
    }

    public function addCommandeProduitAction(Request $request, $count, $commande)
    {
        $commandeProduit = new CommandeProduit();
        $modeleForm = new CommandeProduitType();
        if($count == 0)
        {
            return $this->redirect($this->generateUrl('couture_gestion_couture_resume_commande', array('commande' => $commande)));
        }
        $form = $this->get('form.factory')->create($modeleForm, $commandeProduit);
        if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $commandeProduit->setReference($commande);
                $commandeProduit->setPrixUnitaire($commandeProduit->getModele()->getCout());
                $commandeProduit->setMontantTotal($commandeProduit->getModele()->getCout() * $commandeProduit->getQuantite() );
                $em->persist($commandeProduit);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
                return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array(
                        'count' => $count-1, 'commande' => $commande,
                )));
        }
        
        return $this->render('CoutureGestionBundle:Couture:addCommandeProduit.html.twig', array(
            'form' => $form->createView(), 'commande' => $commande, 'count' => $count
            ));
    }

    public function resumeCommandeAction($commande)
    {
        $em = $this->getDoctrine()->getManager();
        $commandeInfo = $em->getRepository('CoutureGestionBundle:Commande')->findOneBy(array(
            'reference' => $commande));
        $commandeProduit = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findBy(array(
            'reference' => $commande));
        $pt = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findNetPaie($commande);
        return $this->render('CoutureGestionBundle:Couture:resumeCommande.html.twig', array(
            'commande' => $commandeInfo, 'commandeProduit' => $commandeProduit, 'pt' => $pt));
    }
}
