<?php

namespace Couture\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesure
 *
 * @ORM\Table(name="mesure")
 * @ORM\Entity(repositoryClass="Couture\GestionBundle\Repository\MesureRepository")
 */
class Mesure
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
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var int
     *
     * @ORM\Column(name="epaule", type="integer")
     */
    private $epaule;

    /**
     * @var int
     *
     * @ORM\Column(name="cou", type="integer")
     */
    private $cou;

    /**
     * @var int
     *
     * @ORM\Column(name="mancheLongue", type="integer")
     */
    private $mancheLongue;

    /**
     * @var int
     *
     * @ORM\Column(name="mancheCourte", type="integer")
     */
    private $mancheCourte;

    /**
     * @var int
     *
     * @ORM\Column(name="longueurBoubou", type="integer")
     */
    private $longueurBoubou;

    /**
     * @var int
     *
     * @ORM\Column(name="ceinture", type="integer")
     */
    private $ceinture;

    /**
     * @var int
     *
     * @ORM\Column(name="longueurPantalon", type="integer")
     */
    private $longueurPantalon;

    /**
     * @var int
     *
     * @ORM\Column(name="cuisse", type="integer")
     */
    private $cuisse;

    /**
     * @var int
     *
     * @ORM\Column(name="longueurTaille", type="integer", nullable=true)
     */
    private $longueurTaille;

    /**
     * @var int
     *
     * @ORM\Column(name="hanche", type="integer", nullable=true)
     */
    private $hanche;

    /**
     * @var int
     *
     * @ORM\Column(name="longueurTailleBasse", type="integer", nullable=true)
     */
    private $longueurTailleBasse;

    /**
     * @var int
     *
     * @ORM\Column(name="poignet", type="integer")
     */
    private $poignet;

    /**
     * @ORM\OneToOne(targetEntity="Couture\GestionBundle\Entity\Client",  inversedBy="mesure")
     */
    private $client;


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
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Mesure
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
     * Set epaule
     *
     * @param integer $epaule
     *
     * @return Mesure
     */
    public function setEpaule($epaule)
    {
        $this->epaule = $epaule;

        return $this;
    }

    /**
     * Get epaule
     *
     * @return int
     */
    public function getEpaule()
    {
        return $this->epaule;
    }

    /**
     * Set cou
     *
     * @param integer $cou
     *
     * @return Mesure
     */
    public function setCou($cou)
    {
        $this->cou = $cou;

        return $this;
    }

    /**
     * Get cou
     *
     * @return int
     */
    public function getCou()
    {
        return $this->cou;
    }

    /**
     * Set mancheLongue
     *
     * @param integer $mancheLongue
     *
     * @return Mesure
     */
    public function setMancheLongue($mancheLongue)
    {
        $this->mancheLongue = $mancheLongue;

        return $this;
    }

    /**
     * Get mancheLongue
     *
     * @return int
     */
    public function getMancheLongue()
    {
        return $this->mancheLongue;
    }

    /**
     * Set mancheCourte
     *
     * @param integer $mancheCourte
     *
     * @return Mesure
     */
    public function setMancheCourte($mancheCourte)
    {
        $this->mancheCourte = $mancheCourte;

        return $this;
    }

    /**
     * Get mancheCourte
     *
     * @return int
     */
    public function getMancheCourte()
    {
        return $this->mancheCourte;
    }

    /**
     * Set longueurBoubou
     *
     * @param integer $longueurBoubou
     *
     * @return Mesure
     */
    public function setLongueurBoubou($longueurBoubou)
    {
        $this->longueurBoubou = $longueurBoubou;

        return $this;
    }

    /**
     * Get longueurBoubou
     *
     * @return int
     */
    public function getLongueurBoubou()
    {
        return $this->longueurBoubou;
    }

    /**
     * Set ceinture
     *
     * @param integer $ceinture
     *
     * @return Mesure
     */
    public function setCeinture($ceinture)
    {
        $this->ceinture = $ceinture;

        return $this;
    }

    /**
     * Get ceinture
     *
     * @return int
     */
    public function getCeinture()
    {
        return $this->ceinture;
    }

    /**
     * Set longueurPantalon
     *
     * @param integer $longueurPantalon
     *
     * @return Mesure
     */
    public function setLongueurPantalon($longueurPantalon)
    {
        $this->longueurPantalon = $longueurPantalon;

        return $this;
    }

    /**
     * Get longueurPantalon
     *
     * @return int
     */
    public function getLongueurPantalon()
    {
        return $this->longueurPantalon;
    }

    /**
     * Set cuisse
     *
     * @param integer $cuisse
     *
     * @return Mesure
     */
    public function setCuisse($cuisse)
    {
        $this->cuisse = $cuisse;

        return $this;
    }

    /**
     * Get cuisse
     *
     * @return int
     */
    public function getCuisse()
    {
        return $this->cuisse;
    }

    /**
     * Set longueurTaille
     *
     * @param integer $longueurTaille
     *
     * @return Mesure
     */
    public function setLongueurTaille($longueurTaille)
    {
        $this->longueurTaille = $longueurTaille;

        return $this;
    }

    /**
     * Get longueurTaille
     *
     * @return int
     */
    public function getLongueurTaille()
    {
        return $this->longueurTaille;
    }

    /**
     * Set hanche
     *
     * @param integer $hanche
     *
     * @return Mesure
     */
    public function setHanche($hanche)
    {
        $this->hanche = $hanche;

        return $this;
    }

    /**
     * Get hanche
     *
     * @return int
     */
    public function getHanche()
    {
        return $this->hanche;
    }

    /**
     * Set longueurTailleBasse
     *
     * @param integer $longueurTailleBasse
     *
     * @return Mesure
     */
    public function setLongueurTailleBasse($longueurTailleBasse)
    {
        $this->longueurTailleBasse = $longueurTailleBasse;

        return $this;
    }

    /**
     * Get longueurTailleBasse
     *
     * @return int
     */
    public function getLongueurTailleBasse()
    {
        return $this->longueurTailleBasse;
    }

    /**
     * Set poignet
     *
     * @param integer $poignet
     *
     * @return Mesure
     */
    public function setPoignet($poignet)
    {
        $this->poignet = $poignet;

        return $this;
    }

    /**
     * Get poignet
     *
     * @return int
     */
    public function getPoignet()
    {
        return $this->poignet;
    }
    

    /**
     * Set client
     *
     * @param \Couture\GestionBundle\Entity\Client $client
     *
     * @return Mesure
     */
    public function setClient(\Couture\GestionBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Couture\GestionBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
