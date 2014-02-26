<?php

namespace BancarelValentin\PortefolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 */
class Document
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $iframe;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BancarelValentin\PortefolioBundle\Entity\Realisation
     */
    private $idreal;


    /**
     * Set url
     *
     * @param string $url
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Document
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set iframe
     *
     * @param string $iframe
     * @return Document
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idreal
     *
     * @param \BancarelValentin\PortefolioBundle\Entity\Realisation $idreal
     * @return Document
     */
    public function setIdreal(\BancarelValentin\PortefolioBundle\Entity\Realisation $idreal = null)
    {
        $this->idreal = $idreal;

        return $this;
    }

    /**
     * Get idreal
     *
     * @return \BancarelValentin\PortefolioBundle\Entity\Realisation 
     */
    public function getIdreal()
    {
        return $this->idreal;
    }
}
