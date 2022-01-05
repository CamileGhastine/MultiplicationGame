<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Repository\GameRepository;
use App\Service\GameCorrector;
use App\Service\MultiplicationGenerator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig');
    }

    #[Route('/game', name: 'game')]
    public function play(GameRepository $repo, Request $request, RequestStack $requestStack, MultiplicationGenerator $multiplicationGenerator, GameCorrector $gameCorrector): Response
    {
        $game = $multiplicationGenerator->generate(1);
       
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $game->setTimeEnd(time());
            $game = $gameCorrector->correct($game, $requestStack->getSession()->get('gamePersist'));

            dd($repo->findall());
        }
        
        $game->setTimeStart(time());
        $session = $requestStack->getSession();
        $session->set('gamePersist', $game);

        return $this->render('game/game.html.twig', [
            'form' => $form->createView(),
            'game' => $game,
            'serializeGame' =>serialize($game)
        ]);
    }
}
