<?php

     namespace BancarelValentin\PortefolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

     class PortefolioController extends Controller {

          public function indexAction() {
               return $this->render('BancarelValentinPortefolioBundle:Portefolio:index.html.twig', array('onglet' => 'acceuil'));
          }

          public function cvAction() {
               return $this->render('BancarelValentinPortefolioBundle:Portefolio:cv.html.twig', array('onglet' => 'cv'));
          }

          public function listTravauxAction($annee) {
               $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('BancarelValentinPortefolioBundle:Realisation');
               $toutesLesesReals = $repository->findBy(array('annee' => $annee));

               return $this->render('BancarelValentinPortefolioBundle:Portefolio:listTravaux.html.twig', array('onglet' => $annee, 'annee' => $annee, 'lesReals' => $toutesLesesReals));
          }

          public function showAction($id) {
               $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('BancarelValentinPortefolioBundle:Realisation');
               $laReal = $repository->find($id);

               $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('BancarelValentinPortefolioBundle:Document');
               $lesDocs = $repository->findBy(array('idreal' => $id));

               $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('BancarelValentinPortefolioBundle:Image');
               $lesImages = $repository->findBy(array('idreal' => $id));

               return $this->render('BancarelValentinPortefolioBundle:Portefolio:show.html.twig', array('onglet' => $laReal->getAnnee(), 'laReal' => $laReal, 'lesDocs' => $lesDocs, 'leSlide' => $lesImages));
          }

          public function veilleAction() {
               $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('BancarelValentinPortefolioBundle:Realisation');
               $toutesLesesReals = $repository->findBy(array('annee' => 3));

               return $this->render('BancarelValentinPortefolioBundle:Portefolio:listTravaux.html.twig', array('onglet' => 'veille', 'lesReals' => $toutesLesesReals));
          }

          public function contactAction($idMessage) {
               $infoUser = '';
               if ($this->get('request')->getMethod() == 'POST') {
                    $infoUser .= '<p class="error">';
                    $error = false;
                    if (empty($_POST['spam-check'])) {
                         $infoUser .='SPAM detected little bastard <br/> ';
                    }

                    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                         $from = strip_tags($_POST['email']);
                    } else {
                         $infoUser .='Merci d\'entrer une adresse mail correcte <br/> ';
                         $error = true;
                    }

                    if (isset($_POST['name']) && strlen($_POST['name']) > 2) {
                         $name = strip_tags($_POST['name']);
                    } else {
                         $infoUser .='Merci d\'entrer un nom correcte <br/> ';
                         $error = true;
                    }

                    if (isset($_POST['message']) && strlen($_POST['message']) > 5) {
                         $message = strip_tags($_POST['message']);
                    } else {
                         $infoUser .='Merci d\'entrer un message correcte <br/> ';
                         $error = true;
                    }

                    if (isset($_POST['subject'])) {
                         $subject = strip_tags($_POST['subject']);
                    }
                    /*
                      if (preg_match('/[\n\r]/', $_POST['name']) || preg_match('/[\n\r]/', $_POST['email']) || preg_match('/[\n\r]/', $_POST['subject']) || preg_match('/[\n\r]/', $_POST['message'])) {
                      $infoUser .= 'En-têtes interdites dans les champs du formulaire<br />';
                      $error = true;
                      }
                     */
                    $to = 'bancarel.valentin@gmail.com';

                    $infoUser .= 'Si le probleme persiste, envoyer directement votre mail a <a href="mailto:bancarel.valentin@gmail.com">bancarel.valentin@gmail.com</a></p>';


                    if ($error == false) {
                         $msg = "Ce mail a été envoyé par le formulaire de contact de votre protefolio par $name: $from ";
                         $msg .= 'Voici le message qui vous est adressé: ';
                         $msg .=$message;
                         $message = \Swift_Message::newInstance()
                                 ->setSubject('Message du portefolio: ' . $subject)
                                 ->setFrom($from)
                                 ->setTo($to)
                                 ->setBody($msg);
                         if ($this->get('mailer')->send($message)) {
                              $infoUser = '<p class="success">Votre mail a bien été envoyer !</p>';
                         } else {
                              $infoUser = '<p class="error">Il y a eu un probleme lors de l\'envoi du mail merci de reessayer ou de l\'envoyer directement a <a href="mailto:bancarel.valentin@gmail.com">bancarel.valentin@gmail.com</a>!</p>';
                         }
                    }
               }
               return $this->render('BancarelValentinPortefolioBundle:Portefolio:contact.html.twig', array('onglet' => 'contact', 'message' => $infoUser));
          }

     }
     