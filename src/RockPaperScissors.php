<?php
    class RockPaperScissors
    {
        function playGame($input1, $input2){
            $rock = 'rock';
            $scissors = 'scissors';
            $paper = 'paper';
            $draw = 'draw';
            $player1 = 'Player 1';
            $player2 = 'Player 2';

            if(($input1 == $rock && $input2 == $scissors) || ($input1 == $scissors && $input2 == $paper) || ($input1 == $paper && $input2 == $rock)){
                return $player1;
            } elseif(($input1 == $rock && $input2 == $paper) || ($input1 == $paper && $input2 == $scissors) || ($input1 == $scissors && $input2 == $rock)){
                return $player2;
            } elseif(($input1 == $rock && $input2 == $rock) || ($input1 == $scissors && $input2 == $scissors) || ($input1 == $paper && $input2 == $paper)){
                return $draw;
            }
        }
    }
?>
