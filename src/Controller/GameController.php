<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Service\GameCorrector;
use App\Service\MultiplicationGenerator;
use Symfony\Component\HttpFoundation\Request;
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
    public function play(Request $request, MultiplicationGenerator $multiplicationGenerator, GameCorrector $gameCorrector): Response
    {
        $game = $multiplicationGenerator->generate(1);
        
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($request->request, $game);
        }

        return $this->render('game/game.html.twig', [
            'form' => $form->createView(),
            'game' =>$game
        ]);
    }
}
