<?php

     namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

     class ReveilController extends Controller {

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

          public function getUnReveil($id) {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Reveil');
               $leReveil = $repository->find($id);
               return $leReveil;
          }

          public function getAllReveil() {
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Reveil');
               $lesReveils = $repository->findAll();
               return $lesReveils;
          }

          public function isNow($reveil) {
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

     }
     