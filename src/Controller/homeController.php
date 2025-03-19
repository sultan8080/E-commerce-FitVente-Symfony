<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class homeController extends AbstractController
{
    #[Route('/', name: 'app_home')]

    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'homeController',
        ]);

    }
}