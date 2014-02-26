<?php

     namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

     class AdminRPIController extends Controller {

          public function indexAction() {
               $lesPins = $this->getAllPin();
               foreach ($lesPins as $unePin) {
                    $unePin->setValeur($this->getStateConsole($unePin->getNumwiringpi()));
               }
               return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:index.html.twig', array('onglet' => 'rpi', 'lesPins' => $lesPins));
          }

          //-----DOMOTIQUE-----//
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

          //-----Reveil-----//
          public function setReveilAction() {
               $em = $this->getDoctrine()->getManager();
               $lesReveils = $this->getAllPin();
               $reveil = new \BancarelValentin\AdministrationRPIBundle\Entity\Reveil();
               $form = $this->createFormBuilder($reveil)
                       ->add('iframe', 'textarea')
                       ->add('heure', 'text')
                       ->add('jour', 'text')
                       ->add('nom', 'text')
                       ->getForm();

               $request = $this->get('request');
               if ($request->getMethod() == 'POST') {
                    $form->bind($request);
                    if ($form->isValid()) {
                         $em->persist($reveil);
                         $em->flush();
                    }
               }
               return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig', array('onglet' => 'rpi', 'lesReveils' => $lesReveils, 'form' => $form->createView()));
          }

          public function reveilAction() {
               $lesReveils = $this->getAllPin();
               foreach ($lesReveils as $unReveil) {
                    if (isNow($unReveil)) {
                         $this->activeAll();
                         return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig', array('onglet' => 'rpi', 'reveil' => $unReveil));
                    }
               }
               return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig', array('onglet' => 'rpi', 'reveil' => null));
          }

          public function changeJoursReveilAction($idReveil, $nom) {
               $em = $this->getDoctrine()->getManager();
               $leReveil = $this->getUnePin($idPin);
               $leReveil->setJour($nom);
               $em->flush();
               return "success";
          }

          public function changeHeureReveilAction($idReveil, $nom) {
               $em = $this->getDoctrine()->getManager();
               $leReveil = $this->getUnePin($idPin);
               $leReveil->setHeure($nom);
               $em->flush();
               return "success";
          }

          public function changeIframeReveilAction($idReveil, $nom) {
               $em = $this->getDoctrine()->getManager();
               $leReveil = $this->getUnePin($idPin);
               $leReveil->setIframe($nom);
               $em->flush();
               return "success";
          }

          //-----autre fonction-----//
          private function getUnePin($id) {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $laPin = $repository->find($id);
               return $laPin;
          }

          private function getAllPin() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $lesPins = $repository->findAll();
               return $lesPins;
          }

          private function getUnReveil($id) {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Reveil');
               $leReveil = $repository->find($id);
               return $leReveil;
          }

          private function getAllReveil() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Reveil');
               $lesReveils = $repository->findAll();
               return $lesReveils;
          }

          private function isNow($reveil) {
               $lesJours = explode('*', $reveil->getJour());
               foreach ($lesJours as $unJour) {
                    $lHeure = explode('H', $reveil->getHeure());
                    $heure = $lHeure[0];
                    $minute = $lHeure[1];
                    //echo date('w') .'VS'. $unJour .'<br/>'. (date('G') + 1) .'VS'. $heure .'OU'. (date('H') + 1) .'VS'. $heure .'<br/>'.(date('i') .'VS'. $minute.'OU'.date('i') .'VS'. $minute).'<br/><br/>';
                    if ((date('w') == $unJour && (date('G') + 1 == $heure || date('H') + 1 == $heure) && (date('i') == $minute || date('i') == $minute))/* || $force == '1' */) {
                         return true;
                    }
               }
               return false;
          }

          private function activeAll() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $lesPins = $repository->findAll();

               foreach ($lesPins as $unPin) {
                    $this->setState($unPin, '0');
               }
          }

     }
     