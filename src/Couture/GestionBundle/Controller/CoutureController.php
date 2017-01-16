<?php

namespace Couture\GestionBundle\Controller;

use Couture\GestionBundle\Form\MesureFemmeBisType;
use Couture\GestionBundle\Form\MesureHommeBisType;
use Couture\GestionBundle\Form\ModifierModeleType;
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


    //======================= CLIENTS=======================

    // Fonction qui ajoute un nouveau client qui veut effectuer des commandes concernant le couture
    public function formulaireNCCommandeClientAction(Request $request)
    {
        $client = new Client();
        $modeleForm2 = new ClientType();
        $session=$this->getRequest()->getSession();
        $form = $this->get('form.factory')->create($modeleForm2, $client);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Client')->findAll());
            $id = "cl".($count+1);
            $session->set('client',$client);
            $session->set('identifiant',$id);
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_mesure_new_client',array(
                'identifiant' =>$id, 'client' => $client,
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireNCCommandeClientBis.html.twig', array(
            'form' => $form->createView(),
        ));
    }

/*
    public function addClientAction(Request $request)
    {
    	$client = new Client();
        $modele = new ClientType();
        $form = $this->get('form.factory')->create($modele, $client);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Client')->findAll());
            $id = "cl".($count+1);
            $client->setIdentifiant($id);
            $em->persist($client);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_mesure_new_client',array(
                'identifiant' =>$id)));
        }
        return $this->render('CoutureGestionBundle:Couture:addClient.html.twig', array(
            'form' => $form->createView(),
        ));
    }
*/
    
    // Fonction qui ajoute des clients simples ( pas de commandes concernant le couture)
    public function addClientSimpleAction(Request $request)
    {
        $client = new Client();
        $modele = new ClientType();
        $form = $this->get('form.factory')->create($modele, $client);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Client')->findAll());
            $id = "cl".($count+1);
            $client->setIdentifiant($id);
            $em->persist($client);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
        }
        return $this->render('CoutureGestionBundle:Couture:addClient.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    // Fonction qui liste les clients
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
                $db = new \PDO('mysql:host=127.0.0.1;dbname=ciseautech', 'root', 'YENGUEÇÀ');
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
    
    //Fonction qui permet d'ajouter les mesures du client (client avec commande)
    public function mesureNewClientAction(Request $request, $identifiant)
    {
        $session = $this->getRequest()->getSession();
        $client = $session->get('client');
        $mesure = new Mesure();
        if($client->getSexe() == 'M')
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
            $client->setIdentifiant($identifiant);
            $em->persist($client);
            $mesure->setIdentifiant($identifiant);
            $mesure->setClient($client);
            $em->persist($mesure);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_potential_add_commande',array(
                'identifiant' => $client->getIdentifiant())));
        }
        if($client->getSexe() == 'M')
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientHomme.html.twig', array(
                'form' => $form->createView(), 'client' => $client
            ));
        }
        else
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientFemme.html.twig', array(
                'form' => $form->createView(), 'client' => $client
            ));
        }
    }

    // Un client simple qui veut avoir des mesures.
    public function newMesureClientSimpleAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array('id' => $id));
        $mesure = new Mesure();
        if($client->getSexe() == 'M')
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
            //$em = $this->getDoctrine()->getManager();
            //$client->setIdentifiant($identifiant);
            //$em->persist($client);
            $mesure->setIdentifiant($client->getIdentifiant());
            $mesure->setClient($client);
            $em->persist($mesure);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client',array(
                'identifiant' => $client->getIdentifiant())));
        }
        if($client->getSexe() == 'M')
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientHomme.html.twig', array(
                'form' => $form->createView(), 'client' => $client
            ));
        }
        else
        {
            return $this->render('CoutureGestionBundle:Couture:mesureClientFemme.html.twig', array(
                'form' => $form->createView(), 'client' => $client
            ));
        }
    }
    
    //Fonction qui permet de modifier un client.
    public function mesureClientAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $mesure = $em->getRepository('CoutureGestionBundle:Mesure')->findOneBy(array('client' => $id));
        $client = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array('id' => $id));
        if($client->getSexe() == 'M')
        {
            if ($client->getMesure() == NULL )
            {
                $donnees = new ClientType();
                $form = $this->get('form.factory')->create( $donnees, $client);
            }
            else
            {
                $donnees = new MesureHommeBisType();
                $form = $this->get('form.factory')->create($donnees, $mesure);
            }
        }
        else
        {
            if ($client->getMesure() == NULL )
            {
                $donnees = new ClientType();
                $form = $this->get('form.factory')->create( $donnees, $client);
            }
            else
            {
                $donnees = new MesureFemmeBisType();
                $form = $this->get('form.factory')->create($donnees, $mesure);
            }
        }
        if ($form->handleRequest($request)->isValid()) {
            //$em = $this->getDoctrine()->getManager();
            if ($client->getMesure() == NULL ) {
                //$mesure->setIdentifiant($client->getIdentifiant());
                //$mesure->setClient($client);
                $em->persist($client);
                $em->flush();
            }
            else
            {
                $mesure->setIdentifiant($client->getIdentifiant());
                $mesure->setClient($client);
                $em->persist($mesure);
                $em->flush();
            }
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
        }
        if($client->getSexe() == 'M')
        {
            if ($client->getMesure() == NULL)
            {
                return $this->render('CoutureGestionBundle:Couture:addClientBis.html.twig', array(
                    'form' => $form->createView(), 'client' => $client
                ));
            }
            else
            {
                return $this->render('CoutureGestionBundle:Couture:mesureClientHommeBis.html.twig', array(
                    'form' => $form->createView(), 'client' => $client
                ));
            }
        }
        else
        {
            if ($client->getMesure() == NULL)
            {
                return $this->render('CoutureGestionBundle:Couture:addClientBis.html.twig', array(
                    'form' => $form->createView(), 'client' => $client
                ));
            }
            else {
                return $this->render('CoutureGestionBundle:Couture:mesureClientFemmeBis.html.twig', array(
                    'form' => $form->createView(), 'client' => $client
                ));
            }
        }
    }
    // Afficher les details d'un client
    public function afficherClientAction($identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array('identifiant' => $identifiant));
        $mesure = $em->getRepository('CoutureGestionBundle:Mesure')->findOneBy(array('identifiant' => $identifiant));
        if ($client->getMesure() == NULL)
        {
            return $this->render('CoutureGestionBundle:Couture:afficherClientBis.html.twig', array(
                'client' => $client, 'mesure' => $mesure
            ));
        }
        else {
            return $this->render('CoutureGestionBundle:Couture:afficherClient.html.twig', array(
                'client' => $client, 'mesure' => $mesure
            ));
        }
    }

    public function clientAutocompleteAction(Request $request)
    {
        $q = $request->query->get('idClient');
        $results = $this->getDoctrine()->getRepository('CoutureGestionBundle:Client')->findLikeName($q);
        var_dump($results);
        return $this->render('CoutureGestionBundle:Couture:autocompleteClient.html.twig', ['results' => $results]);
    }
    
    // Supprimer un client
    public function supprimerClientAction(Request $request, $identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array('identifiant' => $identifiant));
        $mesure = $em->getRepository('CoutureGestionBundle:Mesure')->findOneBy(array('identifiant' => $identifiant));
        $comande = $em->getRepository('CoutureGestionBundle:Commande')->findOneBy(array('client_id' => $client->getId()));
        //var_dump($comande);
        //die();
        // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$client)
        {
            throw $this->createNotFoundException('Modele[Identifiant='.$identifiant.'] inexistant');
        }
        if ($client->getMesure() == NULL)
        {
            $em->remove($client);
            $em->flush();
        }
        else
        {
            $comande->setClientId(NULL);
            $em->remove($mesure);
            $em->remove($client);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('couture_gestion_couture_list_client'));
    }

    // ================ LES MODELES ================


    // Fonction qui permet d'ajouter un nouveau modèle
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
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_modele'));
        }
        return $this->render('CoutureGestionBundle:Couture:addModele.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // Fouction qui affiche les détails d'un modèle
    public function afficherModeleAction($identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('CoutureGestionBundle:Modele')->findBy(array('reference' => $identifiant));
        return $this->render('CoutureGestionBundle:Couture:afficherModele.html.twig', array(
            'modele' => $modele[0]
        ));
    }

    //Fonction qui liste les modèles
    public function listModeleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('CoutureGestionBundle:Modele')->findAll();
        $modele = array_reverse($modele);
        return $this->render('CoutureGestionBundle:Couture:listModele.html.twig', array(
            'modele' => $modele
        ));
    }
    
    // Fonction qui modifie un modèle
    public function modifierModeleAction(Request $request,$identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('CoutureGestionBundle:Modele')->findOneBy(array('reference' => $identifiant));
        $formModele = new ModeleType();
        $form = $this->get('form.factory')->create($formModele, $modele);
        if ($form->handleRequest($request)->isValid()) {
            $em->persist($modele);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_list_modele'));
        }
        return $this->render('CoutureGestionBundle:Couture:addModele.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // Fonction qui permet de supprimer un modèle
    public function supprimerModeleAction(Request $request,$identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('CoutureGestionBundle:Modele')->findOneBy(array('reference' => $identifiant));
        // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$modele)
        {
            throw $this->createNotFoundException('Modele[Identifiant='.$identifiant.'] inexistant');
        }
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('couture_gestion_couture_list_modele'));
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




    // ===================COMMANDES==================


    public function listCommandeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandeProduit = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findAll();
        return $this->render('CoutureGestionBundle:Couture:listCommande.html.twig', array(
            'commandeProduit' => $commandeProduit
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

        $em = $this->getDoctrine()->getManager();
        $session=$this->getRequest()->getSession();
        $client = $em->getRepository('CoutureGestionBundle:Client')->findAll();
        $form = $this->get('form.factory')->create($modeleForm, $commande);
        if ($form->handleRequest($request)->isValid()) {

            //$em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Commande')->findAll());
            $id = "com".($count+1);
            $identifiant = $commande->getClientId()->getIdentifiant();
            $nbmodele = $commande->getNbModele();
            $session->set('identifiant',$identifiant);
            $commande->setReference($id);
            $commande->setDateCommande(new \Datetime());
            $commande->setLivraison(false);
            $em->persist($commande);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array(
                'nbmodele' => $nbmodele,
                'count' => $commande->getNbModele(),
                'commande' => $commande->getReference(),
                'identifiant' => $identifiant
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    //Ajout d'un nouveau commande
    public function formulairePCCommandeAction(Request $request)
    {
        $commande = new Commande();
        $modeleForm = new CommandePCType();
        $em = $this->getDoctrine()->getManager();
        $session=$this->getRequest()->getSession();
        $identifiant = $session->get('identifiant');
        $client = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array('identifiant' => $identifiant));
        $form = $this->get('form.factory')->create($modeleForm, $commande);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $count = count($em->getRepository('CoutureGestionBundle:Commande')->findAll());
            $id = "com".($count+1);
            $nbmodele = $commande->getNbModele();
            $commande->setReference($id);
            $commande->setDateCommande(new \Datetime());
            $commande->setLivraison(false);
            $commande->setClientId($client);
            $em->persist($commande);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array(
                'nbmodele' => $nbmodele, 'count' => $commande->getNbModele(),
                'commande' => $commande->getReference(), 'identifiant' => $identifiant
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireCommandePC.html.twig', array(
            'client' => $client, 'form' => $form->createView(),
        ));
    }

    //Modifier une commande.
    public function modifierCommandeAction(Request $request,$reference)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('CoutureGestionBundle:Commande')->findOneBy(array('reference' => $reference));
        $formModele = new CommandePCType();
        $form = $this->get('form.factory')->create($formModele, $commande);
        if ($form->handleRequest($request)->isValid()) {
            //$count = count($em->getRepository('CoutureGestionBundle:Commande')->findAll());
            $commande->setDateCommande(new \Datetime());
            $commande->setLivraison(false);
            $em->persist($commande);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_modifier_commande_produit',array(
                    'count' => $commande->getNbModele(), 'reference' => $commande->getReference()
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:formulaireCommandePC.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // Modifier une commande produit
    public function modifierCommandeProduitAction(Request $request, $count,$reference)
    {
        $em = $this->getDoctrine()->getManager();
        $commandeProduit = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findBy(array(
            'reference' => $reference));
        $modeleForm = new CommandeProduitType();
        $countBis = $count;
        $identifiant = $commandeProduit[0]->getCommande()->getClientId()->getIdentifiant();
        if($count == 0)
        {
            return $this->redirect($this->generateUrl('couture_gestion_couture_resume_commande', array(
                'commande' => $reference,
                'identifiant' => $identifiant
            )));
        }
        $form[] = $this->get('form.factory')->create($modeleForm, $commandeProduit);
        if ($form->handleRequest($request)->isValid()) {
            //$em = $this->getDoctrine()->getManager();
            //$commandeProduit->setReference($commande);
            $commandeProduit[$countBis - $count]->setquantite($commandeProduit[$countBis - $count]->getquantite());
            $commandeProduit[$countBis - $count]->setPrixUnitaire($commandeProduit[$countBis - $count]->getModele()->getCout());
            $commandeProduit[$countBis - $count]->setMontantTotal(
                $commandeProduit[$countBis - $count]->getModele()->getCout() * $commandeProduit[$countBis - $count]->getQuantite());
            $em->persist($commandeProduit[$countBis - $count]);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_modifier_commande_produit', array(
                'count' => $count - 1, 'reference' => $reference,
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:addCommandeProduit.html.twig', array(
            'form' => $form[$countBis - $count]->createView(),
            'commande' => $reference, 'count' => $count,
        ));
    }

    // Ajouter une commande produit
    public function addCommandeProduitAction(Request $request, $count, $commande)
    {
        $commandeProduit = new CommandeProduit();
        $modeleForm = new CommandeProduitType();
        $session = $this->getRequest()->getSession();
        $identifiant = $session->get('identifiant');
        $em = $this->getDoctrine()->getManager();
        $commandeEntite = $em->getRepository('CoutureGestionBundle:Commande')->findOneBy(array(
            'reference' => $commande));
        if($count == 0)
        {
            return $this->redirect($this->generateUrl('couture_gestion_couture_resume_commande', array(
                'commande' => $commande, 'identifiant' => $identifiant,
            )));
        }
        $form = $this->get('form.factory')->create($modeleForm, $commandeProduit);
        if ($form->handleRequest($request)->isValid()) {
            $commandeProduit->setReference($commande);
            $commandeProduit->setquantite($commandeProduit->getquantite());
            $commandeProduit->setPrixUnitaire($commandeProduit->getModele()->getCout());
            $commandeProduit->setMontantTotal($commandeProduit->getModele()->getCout() * $commandeProduit->getQuantite());
            $commandeProduit->setCommande($commandeEntite);
            $em->persist($commandeProduit);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Transfert bien enregistré.');
            return $this->redirect($this->generateUrl('couture_gestion_couture_add_commande_produit', array(
                'count' => $count-1, 'commande' => $commande,
            )));
        }
        return $this->render('CoutureGestionBundle:Couture:addCommandeProduit.html.twig', array(
            'form' => $form->createView(),
            'commande' => $commande, 'count' => $count,
            ));
    }

    public function resumeCommandeAction($commande,$identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $clientInfo = $em->getRepository('CoutureGestionBundle:Client')->findOneBy(array(
            'identifiant' => $identifiant));
        $commandeInfo = $em->getRepository('CoutureGestionBundle:Commande')->findOneBy(array(
            'reference' => $commande));
        $commandeProduit = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findBy(array(
            'reference' => $commande));
        $pt = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findNetPaie($commande);
        $session->clear();
        return $this->render('CoutureGestionBundle:Couture:resumeCommande.html.twig', array(
            'commande' => $commandeInfo,
            'commandeProduit' => $commandeProduit,
            'pt' => $pt, 'client' => $clientInfo,
        ));
    }

    public function afficherCommandeAction(Request $request, $reference)
    {
        $em = $this->getDoctrine()->getManager();
        $commandeProduit = $em->getRepository('CoutureGestionBundle:CommandeProduit')->findOneBy(array(
            'reference' => $reference));
        return $this->render('CoutureGestionBundle:Couture:afficherCommande.html.twig', array(
            'commandeProduit' => $commandeProduit
        ));
    }
}
