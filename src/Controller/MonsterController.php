<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MonsterController extends AbstractController
{
    #[Route('/', name: 'app_monster')]
    public function index(): Response
    {
        return $this->render('monster/index.html.twig', [
            'controller_name' => 'MonsterController',
        ]);
    }

    #[Route('/monsters', name: 'app_monsters')]
    public function monsters(): Response
    {
        return $this->render('monster/monsters.html.twig', [
            'controller_name' => 'MonsterController',
        ]);
    }
}
