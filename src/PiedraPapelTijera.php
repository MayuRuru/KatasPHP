<?php

namespace App;

class PiedraPapelTijera {

    public function playGame($player1, $player2) {
        if ($player1 === 'piedra' && $player2 === 'tijeras') {
         return 'Player 1 wins';
        } 
        if ($player1 === 'tijeras' && $player2 === 'piedra') {
            return 'Player 2 wins';
        }
        if ($player1 === 'tijeras' && $player2 === 'tijeras') {
            return 'Empate';
        }
        

        if ($player1 === 'tijeras' && $player2 === 'papel') {
         return 'Player 1 wins';
        }
        if ($player1 === 'papel' && $player2 === 'tijeras') {
            return 'Player 2 wins'; 
        }
        if ($player1 === 'papel' && $player2 === 'papel') {
            return 'Empate';
        }

        if ($player1 === 'papel' && $player2 === 'piedra') {
         return 'Player 1 wins';
        }
        if ($player1 === 'piedra' && $player2 === 'papel') {
            return 'Player 2 wins';
        }
        if ($player1 === 'piedra' && $player2 === 'piedra') {
            return 'Empate';
        };
    }
}