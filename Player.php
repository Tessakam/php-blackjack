<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Hello Player.php';

//create a class called Player
class Player {

    //Make it require the Deck object, pass this Deck from the Blackjack constructor.
    public function __construct($deck) {
       //Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();
    }

//add 2 private properties
    private array $cards = [];
    private bool $lost = false;

    // add public methods
    public function hit() : HIT {
        return $this->hit;
    }

    public function surrender() : SURRENDER {
        return $this->surrender;
    }

    public function getScore() {

    }

    public function hasLost() {

    }


}