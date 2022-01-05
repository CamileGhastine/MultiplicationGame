<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

Use App\Entity\Game;

class GameCorrector 
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

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

    private function flush(Game $game): void
    {
        $this->em->persist($game);
        
        $this->em->flush();
    }
}