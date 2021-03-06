<?php

namespace Proxies\__CG__\Couture\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \Couture\GestionBundle\Entity\Commande implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'reference', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'dateCommande', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'nbModele', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'livraison', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'dateLivraison', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'client_id', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'commandeProduit'];
        }

        return ['__isInitialized__', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'reference', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'dateCommande', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'nbModele', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'livraison', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'dateLivraison', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'client_id', '' . "\0" . 'Couture\\GestionBundle\\Entity\\Commande' . "\0" . 'commandeProduit'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commande $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCommande($dateCommande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCommande', [$dateCommande]);

        return parent::setDateCommande($dateCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCommande()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCommande', []);

        return parent::getDateCommande();
    }

    /**
     * {@inheritDoc}
     */
    public function setLivraison($livraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLivraison', [$livraison]);

        return parent::setLivraison($livraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getLivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLivraison', []);

        return parent::getLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLivraison($dateLivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLivraison', [$dateLivraison]);

        return parent::setDateLivraison($dateLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLivraison', []);

        return parent::getDateLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbModele($nbModele)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbModele', [$nbModele]);

        return parent::setNbModele($nbModele);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbModele()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbModele', []);

        return parent::getNbModele();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientId(\Couture\GestionBundle\Entity\Client $clientId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientId', [$clientId]);

        return parent::setClientId($clientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientId', []);

        return parent::getClientId();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommandeProduit(\Couture\GestionBundle\Entity\Commande $commandeProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommandeProduit', [$commandeProduit]);

        return parent::addCommandeProduit($commandeProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommandeProduit(\Couture\GestionBundle\Entity\Commande $commandeProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommandeProduit', [$commandeProduit]);

        return parent::removeCommandeProduit($commandeProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommandeProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommandeProduit', []);

        return parent::getCommandeProduit();
    }

}
