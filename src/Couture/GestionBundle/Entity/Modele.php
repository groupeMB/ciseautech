<?php

namespace Couture\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="Couture\GestionBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="cout", type="integer")
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="typeModele", type="string", length=255)
     */
    private $typeModele;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeConfection", type="integer")
     */
    private $dureeConfection;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, unique=true)
     */
    private $reference;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return Modele
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Modele
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     *
     * @return Modele
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return int
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set typeModele
     *
     * @param string $typeModele
     *
     * @return Modele
     */
    public function setTypeModele($typeModele)
    {
        $this->typeModele = $typeModele;

        return $this;
    }

    /**
     * Get typeModele
     *
     * @return string
     */
    public function getTypeModele()
    {
        return $this->typeModele;
    }

    /**
     * Set dureeConfection
     *
     * @param integer $dureeConfection
     *
     * @return Modele
     */
    public function setDureeConfection($dureeConfection)
    {
        $this->dureeConfection = $dureeConfection;

        return $this;
    }

    /**
     * Get dureeConfection
     *
     * @return int
     */
    public function getDureeConfection()
    {
        return $this->dureeConfection;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Modele
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
}

