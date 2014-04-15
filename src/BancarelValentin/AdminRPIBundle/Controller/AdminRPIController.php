<?php

namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BancarelValentin\AdminRPIBundle\Entity\Reveil;

class AdminRPIController extends Controller {

    public function indexAction() {
        $lesPins = $this->getAllPin();
        $em = $this->getDoctrine()->getManager();
        $repository = $em
                ->getRepository('BancarelValentinAdminRPIBundle:Pin');
        foreach ($lesPins as $unePin) {
            $unePin->setValeur($this->getStateConsole($unePin));
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:index.html.twig', array('onglet' => 'rpi', 'lesPins' => $lesPins));
    }

    public function switchOnAllAction() {
        $lesPins = $this->getAllPin();
        foreach ($lesPins as $unePin) {
            $this->setStateConsole('0', $unePin);
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function switchOffAllAction() {
        $lesPins = $this->getAllPin();
        foreach ($lesPins as $unePin) {
            $this->setStateConsole('1', $unePin);
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function initAllAction() {
        $lesPins = $this->getAllPin();
        foreach ($lesPins as $unePin) {
            $this->setModeConsole($unePin, 'OUT');
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function switchAllAction() {
        $lesPins = $this->getAllPin();
        foreach ($lesPins as $unePin) {
            $this->changeStateConsole($unePin);
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function changeStateAction($id, $etat) {
        $laPin = $this->getUnePin($id);
        if ($etat == '0') {
            $this->setStateConsole('0', $laPin);
        } elseif ($etat == '1') {
            $this->setStateConsole('1', $laPin);
        } else {
            $this->changeStateConsole($laPin);
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function changeNamePinAction($idPin, $nom) {
        $em = $this->getDoctrine()->getManager();
        $laPin = $this->getUnePin($idPin);
        $laPin->setEquipement($nom);
        $em->flush();
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:showSomething.html.twig', array('toShow' => 'success'));
    }

    public function setReveilAction() {
        $em = $this->getDoctrine()->getManager();
        $lesReveils = $this->getAllReveil();
        $reveil = new Reveil();
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
        $lesReveils = $this->getAllReveil();
        foreach ($lesReveils as $unReveil) {
            if ($this->isNow($unReveil)) {
                $this->activeAll();
                return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig', array('onglet' => 'rpi', 'reveil' => $unReveil, 'refresh' => 'non'));
            }
        }
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig', array('onglet' => 'rpi', 'reveil' => null, 'refresh' => 'oui'));
    }

    public function changeJoursReveilAction($idReveil, $nom) {
        $em = $this->getDoctrine()->getManager();
        $leReveil = $this->getUnePin($idPin);
        $leReveil->setJour($nom);
        $em->flush();
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig', array('onglet' => 'rpi', 'lesReveils' => $lesReveils, 'form' => $form->createView()));
    }

    public function changeHeureReveilAction($idReveil, $nom) {
        $em = $this->getDoctrine()->getManager();
        $leReveil = $this->getUnePin($idPin);
        $leReveil->setHeure($nom);
        $em->flush();
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig', array('onglet' => 'rpi', 'lesReveils' => $lesReveils, 'form' => $form->createView()));
    }

    public function changeIframeReveilAction($idReveil, $nom) {
        $em = $this->getDoctrine()->getManager();
        $leReveil = $this->getUnePin($idPin);
        $leReveil->setIframe($nom);
        $em->flush();
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig', array('onglet' => 'rpi', 'lesReveils' => $lesReveils, 'form' => $form->createView()));
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

    public function activeAll() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em
                ->getRepository('BancarelValentinAdminRPIBundle:Pin');
        $lesPins = $repository->findAll();

        foreach ($lesPins as $unPin) {
            $this->setStateConsole( '0',$unPin);
        }
    }

    public function setStateConsole($etat, $pin) {
        $this->write("gpio write " . $pin->getNumwiringpi() . " " . $etat);
        return "success";
    }

    public function setModeConsole($pin, $mode) {
        $this->write("gpio mode " . $pin->getNumwiringpi() . " " . $mode);
        return "success";
    }

    public function getStateConsole($pin) {
        return $this->write('gpio read ' . $pin->getNumwiringpi());
    }

    public function changeStateConsole($pin) {
        $etat = $this->getStateConsole($pin);
        if ($etat == 0) {
            $etat = 1;
        } else {
            $etat = 0;
        }
        $this->setStateConsole($etat, $pin);
        return "success";
    }

    public function isNow($reveil) {
        $lesJours = explode('*', $reveil->getJour());
        $lHeure = explode('H', $reveil->getHeure());
        $heure = $lHeure[0];
        $minute = $lHeure[1];
        foreach ($lesJours as $unJour) {
            //echo date('w') .'VS'. $unJour .'<br/>'. (date('G')) .'VS'. $heure .'OU'. (date('H')) .'VS'. $heure .'<br/>'.(date('i') .'VS'. $minute.'OU'.date('i') .'VS'. $minute).'<br/><br/>';
            if (date('w') == $unJour) {
                if ((date('G')== $heure || date('H') == $heure) && (date('i') == $minute)) {
                    return true;
                }
            }
        }
        return false;
    }

    public function write($toWrite) {
        $handle = fopen("console.txt", "a");
        fwrite($handle, $toWrite . "\n");
        return exec($toWrite);
    }

}
