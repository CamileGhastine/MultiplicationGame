<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Repository\GameRepository;
use App\Repository\UserRepository;
use App\Service\GameCorrector;
use App\Service\MultiplicationGenerator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class GameController
 * @package App\Controller
 */
class GameController extends AbstractController
{
    /**
     * Display homepage
     *
     * @return Response
     */
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig');
    }

    /**
     * Display game page
     * generate the form and hadle the form to give the final score
     *
     * @param GameRepository $repo
     * @param Request $request
     * @param RequestStack $requestStack
     * @param MultiplicationGenerator $multiplicationGenerator
     * @param GameCorrector $gameCorrector
     *
     * @return Response
     */
    #[Route('/game', name: 'game')]
    public function play(GameRepository $repo, Request $request, RequestStack $requestStack, MultiplicationGenerator $multiplicationGenerator, GameCorrector $gameCorrector): Response
    {
        if (!$this->getUser()) {
            $this->addFlash('login', 'Merci de vous connecter pour jouer !');

            return $this->redirectToRoute('app_login');
        }

        $game = $multiplicationGenerator->generate($request->query->get('level'));

        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $game->setTimeEnd(time());
            $game = $gameCorrector->correct($game, $requestStack->getSession()->get('gamePersist'), $this->getUser());

            return $this->redirectToRoute('result', ['score' => $game->getScore()]);
        }

        $game->setTimeStart(time());

        $session = $requestStack->getSession();
        $session->set('gamePersist', $game);

        return $this->render('game/game.html.twig', [
            'form' => $form->createView(),
            'game' => $game,
        ]);
    }

    /**
     * Display the actual result, all result's user ans the leader bord result
     *
     * @param UserRepository $userRepository
     * @param GameRepository $gameRepository
     * @param Request $request
     *
     * @return Response
     */
    #[Route('/result', name: 'result')]
    public function result(UserRepository $userRepository, GameRepository $gameRepository, Request $request): Response
    {
        $userGames = $this->getUser()
            ? $gameRepository->findBy(['user' => $this->getUser()->getId()], ['score' => 'asc'], 10)
            : null;

        if ($request->query->get('score')) {
            $this->addFlash('result', 'Votre score est de ' . $request->query->get('score'));
        }

        return $this->render('game/result.html.twig', [
            'games' => $gameRepository->findBy([], ['score' => 'asc'], 10),
            'userGames' => $userGames,
        ]);
    }
}
