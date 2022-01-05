<?php

namespace App\Service;

use App\Entity\Game;

class MultiplicationGenerator
{
    public function generate(int $level = 1): Game
    {
        $number1 = 10;
        $number2 = 10;
        if ($level >= 2) $number1 = 100;
        if ($level === 3) $number2 = 100;

        $game = new Game;
        
        for($i=1; $i<=10; $i++) {
            $setQuestion = 'setQuestion'.$i;
            $game->$setQuestion([rand(0,$number1), rand(0,$number2) ]);
        }

        return $game;
    }


}