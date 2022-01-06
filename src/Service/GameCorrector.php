<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

Use App\Entity\Game;

/**
 * Class GameCorrector
 * @package App\Service
 */
class GameCorrector 
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Compare the answers to the expected result and add 10 s penality for each wrong answer
     *
     * @param Game $game
     * @param Game $gamepersist
     * @param User $user
     *
     * @return Game
     */
    public function correct(Game $game, Game $gamepersist, User $user) : Game 
    {
        $game = $this->hydrate($game, $gamepersist, $user);

        $score = $game->getTimeEnd() - $game->getTimeStart();

        for ($i=1; $i<=10; $i++) {
            $getQuestion = 'getQuestion' . $i;
            $getAnswer = 'getAnswer' . $i;

            if ($game->$getQuestion()[0] * $game->$getQuestion()[1] !== $game->$getAnswer()) {
                $score += 10;
            }
        }

        $game->setScore($score);

        $this->flush($game);

        return $game;
    }

    /**
     * Hydrate the object $game with tne question that come from $gamePersist and with the answer that come from $game
     *
     * @param Game $game
     * @param Game $gamePersist
     * @param User $user
     *
     * @return Game
     */
    private function hydrate(Game $game, Game $gamePersist, User $user)
    {
        for($i=1; $i<=10; $i++) { 

            $setQuestion = 'setQuestion' . $i;
            $getQuestion = 'getQuestion' . $i;

            $game->$setQuestion($gamePersist->$getQuestion());
        }
        $game->setTimeStart($gamePersist->getTimeStart());
        $game->setUser($user);

        return $game;       
    }

    /**
     * Flush $game in the database
     *
     * @param Game $game
     */
    private function flush(Game $game): void
    {
        $this->em->persist($game);
        
        $this->em->flush();
    }
}