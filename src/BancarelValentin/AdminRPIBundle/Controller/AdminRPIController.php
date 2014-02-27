<?php

     namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BancarelValentin\AdminRPIBundle\Controller\PinController;

     class AdminRPIController extends Controller {

          public function indexAction() {
//               $pinController = new PinController;
//               $lesPins = $pinController->getAllPin();               
               $em = $this->getDoctrine()->getManager();
               $repository = $em
                       ->getRepository('BancarelValentinAdminRPIBundle:Pin');
               $lesPins = array();
               foreach ($lesPins as $unePin) {
                    $unePin->setValeur($this->getStateConsole($unePin->getNumwiringpi()));
               }
               return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:index.html.twig', array('onglet' => 'rpi', 'lesPins' => $lesPins));
          }

     }
     