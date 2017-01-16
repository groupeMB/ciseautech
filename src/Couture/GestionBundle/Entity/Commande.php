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
     * @var \Couture\GestionBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="Couture\GestionBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client_id;

    /**
     * @var \Couture\GestionBundle\Entity\Commande
     *
     * @ORM\OneToMany(targetEntity="Couture\GestionBundle\Entity\Commande", mappedBy="commande")
     *
     */
    private $commandeProduit;

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

    /**
     * Set clientId
     *
     * @param \Couture\GestionBundle\Entity\Client $clientId
     *
     * @return Commande
     */
    public function setClientId(\Couture\GestionBundle\Entity\Client $clientId = null)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return \Couture\GestionBundle\Entity\Client
     */
    public function getClientId()
    {
        return $this->client_id;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandeProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commandeProduit
     *
     * @param \Couture\GestionBundle\Entity\Commande $commandeProduit
     *
     * @return Commande
     */
    public function addCommandeProduit(\Couture\GestionBundle\Entity\Commande $commandeProduit)
    {
        $this->commandeProduit[] = $commandeProduit;

        return $this;
    }

    /**
     * Remove commandeProduit
     *
     * @param \Couture\GestionBundle\Entity\Commande $commandeProduit
     */
    public function removeCommandeProduit(\Couture\GestionBundle\Entity\Commande $commandeProduit)
    {
        $this->commandeProduit->removeElement($commandeProduit);
    }

    /**
     * Get commandeProduit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandeProduit()
    {
        return $this->commandeProduit;
    }
}
