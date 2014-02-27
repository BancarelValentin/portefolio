<?php

     namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

     class PinController extends Controller {

          public function initAllAction() {
               $lesPins = $this->getAllPin();
               foreach ($lesPins as $unePin) {
                    $this->setModeConsole($unePin, 'OUT');
               }
               return $this->redirect($this->generateUrl('bancarel_valentinadministration_rpi_homepage'));
          }

          public function switchOnAllAction() {
               $lesPins = $this->getAllPin();
               foreach ($lesPins as $unePin) {
                    $unePin->setStateConsole('1');
               }
               return $this->redirect($this->generateUrl('bancarel_valentinadministration_rpi_homepage'));
          }

          public function switchOffAllAction() {
               $lesPins = $this->getAllPin();
               foreach ($lesPins as $unePin) {
                    $unePin->setStateConsole('0');
               }
               return $this->redirect($this->generateUrl('bancarel_valentinadministration_rpi_homepage'));
          }

          public function switchAllAction() {
               $lesPins = $this->getAllPin();
               foreach ($lesPins as $unePin) {
                    $unePin->changeStateConsole();
               }
               return $this->redirect($this->generateUrl('bancarel_valentinadministration_rpi_homepage'));
          }

          public function changeState($idPin, $etat) {
               $laPin = $this->getUnePin($idPin);
               if ($etat != 0 || $etat != 1) {
                    $laPin->changeStateConsole();
               } else {
                    $laPin->setStateConsole(0);
               }
               return "success";
          }

          public function changeNamePinAction($idPin, $nom) {
               $em = $this->getDoctrine()->getManager();
               $laPin = $this->getUnePin($idPin);
               $laPin->setEquipement($nom);
               $em->flush();
               return "success";
          }

          //-----autre fonction-----//
          public function getUnePin($id) {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $laPin = $repository->find($id);
               return $laPin;
          }

          public function getAllPin() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $lesPins = $repository->findAll();
               return $lesPins;
          }

          public function activeAll() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $lesPins = $repository->findAll();

               foreach ($lesPins as $unPin) {
                    $this->setState($unPin, '0');
               }
          }

          public function setStateConsole($etat) {
               exec("gpio write " . $this->getNumwiringpi() . " " . $etat);
               return $this;
          }

          public function setModeConsole($mode) {
               exec("gpio mode " . $this->getNumwiringpi() . " " . $mode);
               return $this;
          }

          public function getStateConsole() {
               return exec('gpio read ' . $this->getNumwiringpi());
          }

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
     