<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function indexHome(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    #[Route('/À-propos', name: 'À-propos')]
    public function indexAPropos(): Response
    {
        return $this->render('A-propos/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
