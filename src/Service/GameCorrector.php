<?php

namespace App\Service;

Use App\Entity\Game;

class GameCorrector 
{
    public function correct(Game $game, Game $gamepersist) : Game 
    {
        $game = $this->hydrate($game, $gamepersist);

        $score = $game->getTimeEnd() - $game->getTimeStart();

        for ($i=1; $i<=10; $i++) {
            $getQuestion = 'getQuestion' . $i;
            $getAnswer = 'getAnswer' . $i;

            if ($game->$getQuestion()[0] * $game->$getQuestion()[1] !== $game->$getAnswer()) {
                $score += 10;
            }
        }

            $game->setScore($score);

            return $game;
    }

    public function hydrate(Game $game, Game $gamePersist)
    {
        for($i=1; $i<=10; $i++) { 

            $setQuestion = 'setQuestion' . $i;
            $getQuestion = 'getQuestion' . $i;

            $game->$setQuestion($gamePersist->$getQuestion());
        }
        $game->setTimeStart($gamePersist->getTimeStart());

        return $game;       
    }
}