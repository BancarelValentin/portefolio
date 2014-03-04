<?php

namespace BancarelValentin\AdminRPIBundle\Entity;

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
     * @var integer
     */
    private $id;

    /**
     * @var \BancarelValentin\AdminRPIBundle\Entity\Realisation
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
     * @param \BancarelValentin\AdminRPIBundle\Entity\Realisation $idreal
     * @return Document
     */
    public function setIdreal(\BancarelValentin\AdminRPIBundle\Entity\Realisation $idreal = null)
    {
        $this->idreal = $idreal;

        return $this;
    }

    /**
     * Get idreal
     *
     * @return \BancarelValentin\AdminRPIBundle\Entity\Realisation 
     */
    public function getIdreal()
    {
        return $this->idreal;
    }
}
