<?php

/**
 * This file is a Service of Mulitply Game which generate the questions (mulitplications) for the game.
 */

namespace App\Service;

use App\Entity\Game;

/**
 * # Class MultiplicationGenerator
 * Generate 10 multiplications and stock its in an attribut $question of the object $game.
 * 
 * @author Camile Ghastine <camile@camile.com>
 * 
 * @package App\Service
 */
class MultiplicationGenerator
{
    /**
     * Genrate randomly 10 multiplications
     * 
     * @example level 1 : 3x2, 5x8, 4x0
     * @example level 2 : 12x4, 35x2, 58x9 
     * @example level 3 : 12x41, 53x25, 82x91 
     *
     * @param int $level
     *
     * @return Game
     */
    public function generate(int $level = 1): Game
    {
        /**
         * if the level is 1 => multiply number as 2 x 3
         * if the level is 2 => multiply number as 21 x 3
         * if the level is 3 => multiply number as 21 x 35
         */
        $number1 = 10;
        $number2 = 10;
        if ($level >= 2) {
            $number1 = 100;
        }
        if ($level === 3) {
            $number2 = 100;
        }

        $game = new Game();

        for ($i = 1; $i <= 10; $i++) {
            $setQuestion = 'setQuestion' . $i;
            $game->$setQuestion([rand(0, $number1), rand(0, $number2)]);
        }

        return $game;
    }
}
