<?php

class TennisGame1 implements TennisGame
{
    protected $player1;
    protected $player1Points = 0;
    protected $player2;
    protected $player2Points = 0;

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * @param  $playerName
     * @return void
     */
    public function wonPoint($playerName)
    {
        switch ($playerName) {
            case $this->player1:
                $this->player1Points++;
                break;
            case $this->player2:
                $this->player2Points++;
                break;

        }
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return Points::$aPoints[$this->player1Points . '-' . $this->player2Points];
    }
}

