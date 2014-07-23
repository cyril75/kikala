<?php

namespace Wf3\KikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Wf3\KikaBundle\Entity\User;
use Wf3\KikaBundle\Form\RegisterType;

class UserController extends Controller
{
    //affiche et traite le formulaire d'inscription
    public function registerAction(Request $request)
    {

        $user = new User();

        //crée une instance de Form
        $register_form = $this->createForm(new RegisterType(), $user);
        $register_form->handleRequest($request);


        $params = array(
            "register_form" => $register_form->createView()
        );

        return $this->render('Wf3KikaBundle:User:register.html.twig', $params);  
    }

/*    public function loginAction()
    {
        return $this->render('Wf3KikaBundle:User:login.html.twig', array(
                // ...
            ));    }*/

}
