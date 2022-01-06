<?php

use PHPUnit\Framework\TestCase;
use App\Service\GameCorrector;
use App\Entity\Game;

class GameCorrectorTest extends TestCase {

    private Game $game;
    private GameCorrector $gameCorrector;

    // init
    public function setUp() :void {
        $this->game = new Game;
        $this->gameCorrector = new GameCorrector();
    }

    // test instance of game
    public function testInstanceGame() {

        $this->assertInstanceOf(Game::class, $this->game);
    }

    // test instance of gameCorrector
    public function testInstanceGameCorrector() {
        $this->assertInstanceOf( GameCorrector::class, $this->gameCorrector );
    }
    
}