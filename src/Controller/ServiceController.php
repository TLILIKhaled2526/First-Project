<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    
  
     #[Route('/service/{{name}}', name: 'app_service')]
    public function showService(string $name): Response
    {
        return $this->render('service/showService.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/service/go-to-home', name: 'service_go_to_home')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
