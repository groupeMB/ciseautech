<?php

namespace Clientele\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity(repositoryClass="Clientele\GestionBundle\Repository\SocieteRepository")
 */
class Societe
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
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

    /**
     * @var string
     *
     * @ORM\Column(name="forme", type="string", length=255)
     */
    private $forme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=255)
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="ninea", type="string", length=255, unique=true)
     */
    private $ninea;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1", type="string", length=255)
     */
    private $nom1;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom1", type="string", length=255)
     */
    private $prenom1;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction1", type="string", length=255)
     */
    private $fonction1;

    /**
     * @var string
     *
     * @ORM\Column(name="numIdentification1", type="string", length=255)
     */
    private $numIdentification1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDelivranceNumID1", type="date")
     */
    private $dateDelivranceNumID1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpirationNumID1", type="date")
     */
    private $dateExpirationNumID1;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2", type="string", length=255, nullable=true)
     */
    private $nom2;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom2", type="string", length=255, nullable=true)
     */
    private $prenom2;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction2", type="string", length=255, nullable=true)
     */
    private $fonction2;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=255, nullable=true)
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="numIdentification", type="string", length=255, nullable=true)
     */
    private $numIdentification2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDelivranceNumID2", type="date", nullable=true)
     */
    private $dateDelivranceNumID2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpirationNumID2", type="date", nullable=true)
     */
    private $dateExpirationNumID2;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set denomination
     *
     * @param string $denomination
     *
     * @return Societe
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set forme
     *
     * @param string $forme
     *
     * @return Societe
     */
    public function setForme($forme)
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * Get forme
     *
     * @return string
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Societe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     *
     * @return Societe
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return string
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Societe
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
     * Set ninea
     *
     * @param string $ninea
     *
     * @return Societe
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    /**
     * Get ninea
     *
     * @return string
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set nom1
     *
     * @param string $nom1
     *
     * @return Societe
     */
    public function setNom1($nom1)
    {
        $this->nom1 = $nom1;

        return $this;
    }

    /**
     * Get nom1
     *
     * @return string
     */
    public function getNom1()
    {
        return $this->nom1;
    }

    /**
     * Set prenom1
     *
     * @param string $prenom1
     *
     * @return Societe
     */
    public function setPrenom1($prenom1)
    {
        $this->prenom1 = $prenom1;

        return $this;
    }

    /**
     * Get prenom1
     *
     * @return string
     */
    public function getPrenom1()
    {
        return $this->prenom1;
    }

    /**
     * Set fonction1
     *
     * @param string $fonction1
     *
     * @return Societe
     */
    public function setFonction1($fonction1)
    {
        $this->fonction1 = $fonction1;

        return $this;
    }

    /**
     * Get fonction1
     *
     * @return string
     */
    public function getFonction1()
    {
        return $this->fonction1;
    }

    /**
     * Set numIdentification1
     *
     * @param string $numIdentification1
     *
     * @return Societe
     */
    public function setNumIdentification1($numIdentification1)
    {
        $this->numIdentification1 = $numIdentification1;

        return $this;
    }

    /**
     * Get numIdentification1
     *
     * @return string
     */
    public function getNumIdentification1()
    {
        return $this->numIdentification1;
    }

    /**
     * Set dateDelivranceNumID1
     *
     * @param \DateTime $dateDelivranceNumID1
     *
     * @return Societe
     */
    public function setDateDelivranceNumID1($dateDelivranceNumID1)
    {
        $this->dateDelivranceNumID1 = $dateDelivranceNumID1;

        return $this;
    }

    /**
     * Get dateDelivranceNumID1
     *
     * @return \DateTime
     */
    public function getDateDelivranceNumID1()
    {
        return $this->dateDelivranceNumID1;
    }

    /**
     * Set dateExpirationNumID1
     *
     * @param \DateTime $dateExpirationNumID1
     *
     * @return Societe
     */
    public function setDateExpirationNumID1($dateExpirationNumID1)
    {
        $this->dateExpirationNumID1 = $dateExpirationNumID1;

        return $this;
    }

    /**
     * Get dateExpirationNumID1
     *
     * @return \DateTime
     */
    public function getDateExpirationNumID1()
    {
        return $this->dateExpirationNumID1;
    }

    /**
     * Set nom2
     *
     * @param string $nom2
     *
     * @return Societe
     */
    public function setNom2($nom2)
    {
        $this->nom2 = $nom2;

        return $this;
    }

    /**
     * Get nom2
     *
     * @return string
     */
    public function getNom2()
    {
        return $this->nom2;
    }

    /**
     * Set prenom2
     *
     * @param string $prenom2
     *
     * @return Societe
     */
    public function setPrenom2($prenom2)
    {
        $this->prenom2 = $prenom2;

        return $this;
    }

    /**
     * Get prenom2
     *
     * @return string
     */
    public function getPrenom2()
    {
        return $this->prenom2;
    }

    /**
     * Set fonction2
     *
     * @param string $fonction2
     *
     * @return Societe
     */
    public function setFonction2($fonction2)
    {
        $this->fonction2 = $fonction2;

        return $this;
    }

    /**
     * Get fonction2
     *
     * @return string
     */
    public function getFonction2()
    {
        return $this->fonction2;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     *
     * @return Societe
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set numIdentification2
     *
     * @param string $numIdentification2
     *
     * @return Societe
     */
    public function setNumIdentification2($numIdentification2)
    {
        $this->numIdentification2 = $numIdentification2;

        return $this;
    }

    /**
     * Get numIdentification2
     *
     * @return string
     */
    public function getNumIdentification2()
    {
        return $this->numIdentification2;
    }

    /**
     * Set dateDelivranceNumID2
     *
     * @param \DateTime $dateDelivranceNumID2
     *
     * @return Societe
     */
    public function setDateDelivranceNumID2($dateDelivranceNumID2)
    {
        $this->dateDelivranceNumID2 = $dateDelivranceNumID2;

        return $this;
    }

    /**
     * Get dateDelivranceNumID2
     *
     * @return \DateTime
     */
    public function getDateDelivranceNumID2()
    {
        return $this->dateDelivranceNumID2;
    }

    /**
     * Set dateExpirationNumID2
     *
     * @param \DateTime $dateExpirationNumID2
     *
     * @return Societe
     */
    public function setDateExpirationNumID2($dateExpirationNumID2)
    {
        $this->dateExpirationNumID2 = $dateExpirationNumID2;

        return $this;
    }

    /**
     * Get dateExpirationNumID2
     *
     * @return \DateTime
     */
    public function getDateExpirationNumID2()
    {
        return $this->dateExpirationNumID2;
    }
}
