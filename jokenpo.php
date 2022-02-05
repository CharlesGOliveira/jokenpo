<?php

require __DIR__ . '/vendor/autoload.php';

use Gesture\Rock;
use Gesture\Scissor;
use Gesture\Paper;

$player1 = new Rock();
$player2 = new Paper();
$player3 = new Scissor();

//Vitórias
echo Jokenpo::play($player1, $player3);
echo Jokenpo::play($player2, $player1);
echo Jokenpo::play($player3, $player2);

//Derrotas
echo Jokenpo::play($player1, $player2);
echo Jokenpo::play($player2, $player3);
echo Jokenpo::play($player3, $player1);

//Empate
echo Jokenpo::play($player1, $player1);

class Jokenpo {

    public function play($player1, $player2) : string
    {
        if ($player1->win == $player2->name) {
            return 'Jogador 1 jogou ' . $player1->name . ' e VENCEU ' . $player2->name . ' do jogador 2' . '<br>';
        } elseif ($player1->loses == $player2->name) {
            return 'Jogador 1 jogou ' . $player1->name . ' e PERDEU para ' . $player2->name . ' do jogador 2' . '<br>';
        }

        return 'Ambos jogadores jogaram os mesmos gestos. Houve um empate!';
    }
}