<?php

namespace Couture\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Couture\GestionBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="telephone", type="string", length=255, unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, unique=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreCommande", type="integer", nullable=true)
     */
    private $nombreCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreAchat", type="integer", nullable=true)
     */
    private $nombreAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="typeClient", type="string", length=255, nullable=true)
     */
    private $typeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255, unique=true)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nombreCommande
     *
     * @param integer $nombreCommande
     *
     * @return Client
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
     * Set nombreAchat
     *
     * @param integer $nombreAchat
     *
     * @return Client
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
     * Set typeClient
     *
     * @param string $typeClient
     *
     * @return Client
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
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Client
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Client
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
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

    public function getUniqueName()
    {
        return sprintf('%s - %s - %s', $this->identifiant, $this->nom, $this->prenom);
    }
}