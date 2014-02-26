<?php
namespace BancarelValentin\PortefolioBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pin
 */
class Pin {
     /**
      * @var integer
      */
     private $numwiringpi;

     /**
      * @var integer
      */
     private $numgpio;

     /**
      * @var string
      */
     private $nom;

     /**
      * @var string
      */
     private $mode;

     /**
      * @var string
      */
     private $valeur;

     /**
      * @var string
      */
     private $equipement;

     /**
      * @var integer
      */
     private $id;

     /**
      * Set numwiringpi
      *
      * @param integer $numwiringpi
      * @return Pin
      */
     public function setNumwiringpi($numwiringpi) {
          $this->numwiringpi = $numwiringpi;

          return $this;
     }

     /**
      * Get numwiringpi
      *
      * @return integer 
      */
     public function getNumwiringpi() {
          return $this->numwiringpi;
     }

     /**
      * Set numgpio
      *
      * @param integer $numgpio
      * @return Pin
      */
     public function setNumgpio($numgpio) {
          $this->numgpio = $numgpio;

          return $this;
     }

     /**
      * Get numgpio
      *
      * @return integer 
      */
     public function getNumgpio() {
          return $this->numgpio;
     }

     /**
      * Set nom
      *
      * @param string $nom
      * @return Pin
      */
     public function setNom($nom) {
          $this->nom = $nom;

          return $this;
     }

     /**
      * Get nom
      *
      * @return string 
      */
     public function getNom() {
          return $this->nom;
     }

     /**
      * Set mode
      *
      * @param string $mode
      * @return Pin
      */
     public function setMode($mode) {
          $this->mode = $mode;

          return $this;
     }

     /**
      * Get mode
      *
      * @return string 
      */
     public function getMode() {
          return $this->mode;
     }

     /**
      * Set valeur
      *
      * @param string $valeur
      * @return Pin
      */
     public function setValeur($valeur) {
          $this->valeur = $valeur;

          return $this;
     }

     /**
      * Get valeur
      *
      * @return string 
      */
     public function getValeur() {
          return $this->valeur;
     }

     /**
      * Set equipement
      *
      * @param string $equipement
      * @return Pin
      */
     public function setEquipement($equipement) {
          $this->equipement = $equipement;

          return $this;
     }

     /**
      * Get equipement
      *
      * @return string 
      */
     public function getEquipement() {
          return $this->equipement;
     }

     /**
      * Get id
      *
      * @return integer 
      */
     public function getId() {
          return $this->id;
     }

     

     /**
      * Set state console
      *
      * @param int $etat
      * @return Pin
      */
     public function setStateConsole($etat) {
          exec("gpio write " . $this->getNumwiringpi() . " " . $etat);
          return $this;
     }


     /**
      * Set mode console
      *
      * @param int $mode
      * @return Pin
      */
     public function setModeConsole($mode) {
          exec("gpio mode " . $this->getNumwiringpi() . " " . $mode);
          return $this;
     }

     /**
      * Get state console
      *
      * @return integer 
      */
     public function getStateConsole() {
          return exec('gpio read ' . $this->getNumwiringpi());
     }

     /**
      * Set change state console
      *
      * @return Pin
      */
     public function changeStateConsole() {
          $etat = $this->getState();
          if ($etat == 0) {
               $etat = 1;
          } else {
               $etat = 0;
          }
          $this->setState($this, $etat);
          return $this;
     }
}
     