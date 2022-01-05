<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig');
    }

    #[Route('/game', name: 'game')]
    public function play(): Response
    {
        $game = new Game;
        $form = $this->createForm(GameType::class, $game);

        return $this->render('game/game.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
