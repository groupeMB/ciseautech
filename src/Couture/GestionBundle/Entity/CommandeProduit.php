<?php

namespace Couture\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProduit
 *
 * @ORM\Table(name="commande_produit")
 * @ORM\Entity(repositoryClass="Couture\GestionBundle\Repository\CommandeProduitRepository")
 */
class CommandeProduit
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
    * @ORM\ManyToOne(targetEntity="Couture\GestionBundle\Entity\Modele")
    */
    private $modele;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="prixUnitaire", type="integer")
     */
    private $prixUnitaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantTotal", type="integer", length=255)
     */
    private $montantTotal;


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
     * @return CommandeProduit
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
     * Set modele
     *
     * @param string $modele
     *
     * @return CommandeProduit
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return CommandeProduit
     */
    public function setquantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getquantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixUnitaire
     *
     * @param integer $prixUnitaire
     *
     * @return CommandeProduit
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return int
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set montantTotal
     *
     * @param integer $montantTotal
     *
     * @return CommandeProduit
     */
    public function setMontantTotal($montantTotal)
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * Get montantTotal
     *
     * @return int
     */
    public function getMontantTotal()
    {
        return $this->montantTotal;
    }
}
