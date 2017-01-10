<?php

namespace Couture\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Couture\GestionBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, unique=true)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="date")
     */
    private $dateCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="nbModele", type="integer")
     */
    private $nbModele;

    /**
     * @var int
     *
     * @ORM\Column(name="paieNet", type="integer", nullable=true)
     */
    private $paieNet;

    /**
     * @var bool
     *
     * @ORM\Column(name="livraison", type="boolean")
     */
    private $livraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="date", nullable=true)
     */
    private $dateLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="avance", type="integer", nullable=true)
     */
    private $avance;

    /**
     * @var int
     *
     * @ORM\Column(name="restant", type="integer", nullable=true)
     */
    private $restant;

    /**
     * @var string
     *
     * @ORM\Column(name="idClient", type="string", length=255, nullable=true)
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=255)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomClient", type="string", length=255)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneClient", type="string", length=255)
     */
    private $telephoneClient;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Commande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set paieNet
     *
     * @param integer $paieNet
     *
     * @return Commande
     */
    public function setPaieNet($paieNet)
    {
        $this->paieNet = $paieNet;

        return $this;
    }

    /**
     * Get paieNet
     *
     * @return int
     */
    public function getPaieNet()
    {
        return $this->paieNet;
    }

    /**
     * Set livraison
     *
     * @param boolean $livraison
     *
     * @return Commande
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return bool
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Commande
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set avance
     *
     * @param integer $avance
     *
     * @return Commande
     */
    public function setAvance($avance)
    {
        $this->avance = $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return int
     */
    public function getAvance()
    {
        return $this->avance;
    }

    /**
     * Set restant
     *
     * @param integer $restant
     *
     * @return Commande
     */
    public function setRestant($restant)
    {
        $this->restant = $restant;

        return $this;
    }

    /**
     * Get restant
     *
     * @return int
     */
    public function getRestant()
    {
        return $this->restant;
    }

    /**
     * Set idClient
     *
     * @param string $idClient
     *
     * @return Commande
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return string
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Commande
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return Commande
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set telephoneClient
     *
     * @param string $telephoneClient
     *
     * @return Commande
     */
    public function setTelephoneClient($telephoneClient)
    {
        $this->telephoneClient = $telephoneClient;

        return $this;
    }

    /**
     * Get telephoneClient
     *
     * @return string
     */
    public function getTelephoneClient()
    {
        return $this->telephoneClient;
    }

    /**
     * Set nbModele
     *
     * @param integer $nbModele
     *
     * @return Commande
     */
    public function setNbModele($nbModele)
    {
        $this->nbModele = $nbModele;

        return $this;
    }

    /**
     * Get nbModele
     *
     * @return integer
     */
    public function getNbModele()
    {
        return $this->nbModele;
    }
}
