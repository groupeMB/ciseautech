<?php

namespace Clientele\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individu
 *
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="Clientele\GestionBundle\Repository\IndividuRepository")
 */
class Individu
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="numIdentification", type="string", length=255, nullable=true, unique=true)
     */
    private $numIdentification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDelivranceNumID", type="date")
     */
    private $dateDelivranceNumID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpirationNumID", type="date")
     */
    private $dateExpirationNumID;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreCommande", type="integer")
     */
    private $nombreCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="typeClient", type="string", length=255)
     */
    private $typeClient;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreAchat", type="integer")
     */
    private $nombreAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255)
     */
    private $situation;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Individu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Individu
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Individu
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Individu
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set numIdentification
     *
     * @param string $numIdentification
     *
     * @return Individu
     */
    public function setNumIdentification($numIdentification)
    {
        $this->numIdentification = $numIdentification;

        return $this;
    }

    /**
     * Get numIdentification
     *
     * @return string
     */
    public function getNumIdentification()
    {
        return $this->numIdentification;
    }

    /**
     * Set dateDelivranceNumID
     *
     * @param \DateTime $dateDelivranceNumID
     *
     * @return Individu
     */
    public function setDateDelivranceNumID($dateDelivranceNumID)
    {
        $this->dateDelivranceNumID = $dateDelivranceNumID;

        return $this;
    }

    /**
     * Get dateDelivranceNumID
     *
     * @return \DateTime
     */
    public function getDateDelivranceNumID()
    {
        return $this->dateDelivranceNumID;
    }

    /**
     * Set dateExpirationNumID
     *
     * @param \DateTime $dateExpirationNumID
     *
     * @return Individu
     */
    public function setDateExpirationNumID($dateExpirationNumID)
    {
        $this->dateExpirationNumID = $dateExpirationNumID;

        return $this;
    }

    /**
     * Get dateExpirationNumID
     *
     * @return \DateTime
     */
    public function getDateExpirationNumID()
    {
        return $this->dateExpirationNumID;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Individu
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nombreCommande
     *
     * @param integer $nombreCommande
     *
     * @return Individu
     */
    public function setNombreCommande($nombreCommande)
    {
        $this->nombreCommande = $nombreCommande;

        return $this;
    }

    /**
     * Get nombreCommande
     *
     * @return int
     */
    public function getNombreCommande()
    {
        return $this->nombreCommande;
    }

    /**
     * Set typeClient
     *
     * @param string $typeClient
     *
     * @return Individu
     */
    public function setTypeClient($typeClient)
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    /**
     * Get typeClient
     *
     * @return string
     */
    public function getTypeClient()
    {
        return $this->typeClient;
    }

    /**
     * Set nombreAchat
     *
     * @param integer $nombreAchat
     *
     * @return Individu
     */
    public function setNombreAchat($nombreAchat)
    {
        $this->nombreAchat = $nombreAchat;

        return $this;
    }

    /**
     * Get nombreAchat
     *
     * @return int
     */
    public function getNombreAchat()
    {
        return $this->nombreAchat;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Individu
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set situation
     *
     * @param string $situation
     *
     * @return Individu
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }
}

