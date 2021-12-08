<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \PDO;
use PDOException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Visiteur;
use Doctrine\ORM\EntityManagerInterface;

class CreerFicheController extends AbstractController
{
    /**
     * @Route("/creer/fiche", name="creer_fiche")
     */
    public function index(): Response
    {
        return $this->render('creer_fiche/index.html.twig', [
            'controller_name' => 'CreerFicheController',
        ]);
    }
}
