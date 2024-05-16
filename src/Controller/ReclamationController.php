<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation/passer", name="app_reclamation")
     */
    public function passer_reclamation(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

     /**
     * @Route("/reclamation/voir", name="app_reclamation")
     */
    public function voir_reclamation(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


     /**
     * @Route("/reclamation/repondre/{id}", name="app_reclamation")
     */
    public function repondre_reclamation(int $id): Response	
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


}
