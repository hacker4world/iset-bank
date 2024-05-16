<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte/accepter/{id}")
     */
    public function accepter_compte(int $id): Response
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',

        ]);
    }

    /**
     * @Route("/compte/modifier/{id}")
     */
    public function modifier_compte(int $id): Response
    {
        
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }


     /**
     * @Route("/compte/supprimer/{id}")
     */
    public function supprimer_compte(int $id): Response
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    /**
     * @Route("/compte/affiche")
     */
    public function affiche_les_compte()

    {
        
        $utilisateur = $this->getDoctrine()
        ->getRepository(Utilisateur::class)
        ->findAll();
        return $this->render("compte/affiche.html.twig", [
            'utilisateur' =>  $utilisateur
        ]);

    }


}
