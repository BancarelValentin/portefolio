<?php

namespace BancarelValentin\AdminRPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reveil
 */
class Reveil
{
    /**
     * @var string
     */
    private $iframe;

    /**
     * @var string
     */
    private $heure;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set iframe
     *
     * @param string $iframe
     * @return Reveil
     */
    public function setIframe($iframe)
    {
        $this->iframe = $iframe;

        return $this;
    }

    /**
     * Get iframe
     *
     * @return string 
     */
    public function getIframe()
    {
        return $this->iframe;
    }

    /**
     * Set heure
     *
     * @param string $heure
     * @return Reveil
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set jour
     *
     * @param string $jour
     * @return Reveil
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Reveil
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
