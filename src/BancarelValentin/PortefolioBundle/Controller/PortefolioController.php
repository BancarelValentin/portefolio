<?php

namespace BancarelValentin\PortefolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortefolioController extends Controller
{
    public function indexAction()
    {
        return $this->render('BancarelValentinPortefolioBundle:Portefolio:index.html.twig', array('name' => 'toto'));
    }
}
