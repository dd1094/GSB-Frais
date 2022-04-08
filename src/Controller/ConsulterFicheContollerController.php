<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsulterFicheContollerController extends AbstractController
{
    /**
     * @Route("/consulter/fiche/contoller", name="consulter_fiche_contoller")
     */
    public function index(): Response
    {
        return $this->render('consulter_fiche_contoller/index.html.twig', [
            'controller_name' => 'ConsulterFicheContollerController',
        ]);
    }

    public function 
   {
       $em = $this->getDoctrine()->getManager();
       $em -> getRepository() -> findOneBy(array('login' => $login , 'mdp' => $mdp));


       $responseParameters->set('mavariable', $this->prepareListe());

       return $responseParameters;
   }
}
