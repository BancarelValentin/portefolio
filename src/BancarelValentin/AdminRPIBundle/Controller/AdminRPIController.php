<?php

namespace BancarelValentin\AdminRPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminRPIController extends Controller
{
    public function indexAction()
    {
        return $this->render('BancarelValentinAdminRPIBundle:AdminRPI:index.html.twig', array());
    }
}
