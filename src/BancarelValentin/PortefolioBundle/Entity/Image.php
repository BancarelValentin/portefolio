<?php

namespace BancarelValentin\PortefolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
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
    private $soustitre;

    /**
     * @var string
     */
    private $description;

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
     * @return Image
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
     * @return Image
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
     * Set soustitre
     *
     * @param string $soustitre
     * @return Image
     */
    public function setSoustitre($soustitre)
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    /**
     * Get soustitre
     *
     * @return string 
     */
    public function getSoustitre()
    {
        return $this->soustitre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Image
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
     * @return Image
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
