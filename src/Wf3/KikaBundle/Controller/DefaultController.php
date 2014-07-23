<?php

namespace Wf3\KikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	//page d'accueil du site
	public function homeAction()
	{

        return $this->render('Wf3KikaBundle:Default:home.html.twig');
    }

    //page mentions légales
	public function legalAction()
	{

        return $this->render('Wf3KikaBundle:Default:legal.html.twig');
    }

    //page à propos
	public function aboutAction()
	{

        return $this->render('Wf3KikaBundle:Default:about.html.twig');
    }
}
