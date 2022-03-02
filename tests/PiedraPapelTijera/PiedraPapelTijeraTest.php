<?php

namespace Tests;

use App\PiedraPapelTijera;
use PHPUnit\Framework\TestCase;


class PiedraPapelTijeraTest extends TestCase {

	public function test_example(
		) {
	
			$this->assertEquals(4, 4);
		}
	
	public function test_player1_wins() {
        //given
        $player1 = 'piedra';
        $player2 = 'tijeras';
        $player3 = 'tijeras';
        $player4 = 'papel';
        $player5 = 'papel';
        $player6 = 'piedra';
        $game1 = new PiedraPapelTijera;
    
        //when
        $result1 = $game1->playGame($player1, $player2);
        $result2 = $game1->playGame($player3, $player4);
        $result3 = $game1->playGame($player5, $player6);

        //then
        $this->assertEquals('Player 1 wins', $result1);
        $this->assertEquals('Player 1 wins', $result2);
        $this->assertEquals('Player 1 wins', $result3);
    }
    
    public function test_player2_wins() {
        //given
        $player1 = 'piedra';
        $player2 = 'tijeras';
        $player3 = 'tijeras';
        $player4 = 'papel';
        $player5 = 'papel';
        $player6 = 'piedra';
        $game2 = new PiedraPapelTijera;
    
        //when
        $result1 = $game2->playGame($player2, $player1);
        $result2 = $game2->playGame($player4, $player3);
        $result3 = $game2->playGame($player6, $player5);

        //then
        $this->assertEquals('Player 2 wins', $result1);
        $this->assertEquals('Player 2 wins', $result2);
        $this->assertEquals('Player 2 wins', $result3);
    }

    public function test_equals(){
        //given
        $player1 = 'piedra';
        $player2 = 'tijeras';
        $player3 = 'tijeras';
        $player4 = 'papel';
        $player5 = 'papel';
        $player6 = 'piedra';
        $game3 = new PiedraPapelTijera;
    
        //when
        $result1 = $game3->playGame($player6, $player1);
        $result2 = $game3->playGame($player2, $player3);
        $result3 = $game3->playGame($player4, $player5);

        //then
        $this->assertEquals('Empate', $result1);
        $this->assertEquals('Empate', $result2);
        $this->assertEquals('Empate', $result3);
    }
    

}
