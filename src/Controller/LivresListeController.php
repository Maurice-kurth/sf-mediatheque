<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Document;
use App\Entity\Livres;

class LivresListeController extends AbstractController
{
    #[Route('/livres/liste', name: 'app_livres_liste')]
    public function index(): Response
    {
    $repo = $this->getDoctrine()->getRepository(Livres::class);
    $livres = $repo->findAll();

        return $this->render('livres_liste/livres.html.twig', [
            'controller_name' => 'LivresListeController',
            'livres'=> $livres,
        ]);
    }

    #[Route('/livre/{id}', name: 'app_livres_solo')]
    public function details($id): Response
    {
    $repo = $this->getDoctrine()->getRepository(Livres::class);
    $livre = $repo->find($id);
    $support = $livre->getSupport();
    $livresConseillés = $repo->findBy(array('support' => $support ),array('nom' => 'ASC' ),3); 
        return $this->render('livres_liste/livre.html.twig', [
            'controller_name' => 'LivresSoloController',
            'livre'=> $livre,
            'livresConseillés' => $livresConseillés,
        ]);
    }
}

