<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenements;

class EvenementsController extends AbstractController
{
    #[Route('/evenements', name: 'app_evenements')]
    public function index(): Response
    {
 
        //$evenements = $repo->findAll();
        // Find evenement happening in the next 3 months

       // $conn = $this->getEntityManager()->getConnection();

       /* $prochainsEvenements = $this->getDoctrine()
        ->getManager()
        ->createQuery('SELECT * FROM Evenements e WHERE e.date > CURRENT_DATE()')
        ->getResult();
*/

//Get evenement happening in the next 3 months
        $repo = $this->getDoctrine()->getRepository(Evenements::class);
        $prochainsEvenements = $repo->findByDateInXMonths(3);


      
        return $this->render('evenements/index.html.twig', [
            'controller_name' => 'EvenementsController',
            'prochainsEvenements' => $prochainsEvenements
        ]);
    }
}
