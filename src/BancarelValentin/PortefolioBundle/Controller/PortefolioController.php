<?php

namespace BancarelValentin\PortefolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortefolioController extends Controller
{
    public function indexAction()
    {
        return $this->render('BancarelValentinPortefolioBundle:Portefolio:index.html.twig', array('onglet'=>'acceuil'));
    }
    
    
    public function cvAction()
    {
        return $this->render('BancarelValentinPortefolioBundle:Portefolio:cv.html.twig', array('onglet'=>'cv'));
    }
    
    
    public function listTravauxAction($annee)
    {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('BancarelValentinPortefolioBundle:Realisation');
        $toutesLesesReals = $repository->findBy(array('annee' => $annee));
          
        return $this->render('BancarelValentinPortefolioBundle:Portefolio:listTravaux.html.twig', array('onglet' => $annee, 'annee' => $annee, 'lesReals' => $toutesLesesReals));
    }
    
    
    public function showAction($id)
    {
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
}
