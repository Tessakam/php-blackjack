<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Hello Player.php';
require 'Suit.php';
require 'Card.php';
require 'Deck.php';

//create a class called Player
class Player {

    //Make it require the Deck object, pass this Deck from the Blackjack constructor.
    function __construct($deck) {
       //Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        $deck->function -> drawCard();
        $deck->function -> drawCard();
    }

//add 2 private properties
    private $cards = array();


    private $lost = false;

    // add public methods
    public function hit() {

    }

    public function surrender() {

    }

    public function getScore() {

    }

    public function hasLost() {

    }


}