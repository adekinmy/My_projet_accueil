<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Définition de la classe DefaultController qui étend AbstractController
class DefaultController extends AbstractController
{
    // Définition de la route pour la page d'accueil
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        // Rendu du template Twig pour la page d'accueil
        return $this->render('/index.html.twig', [
            'website' => 'Wild Series',
        ]);
    }
}