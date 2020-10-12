<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Hello Blackjack';
require 'Suit.php';
require 'Card.php';
require 'Deck.php';

//create a class called Blackjack
class Blackjack {

//add 3 private properties
    private $player;
    private $dealer;
    private $deck;

    function __construct($deck) {
        //instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->player = new Player;
        $this->dealer = new Player;
        //create a new deck object
        $this->deck = new Deck;
        $this->deck = shuffle($cards);
    }

    // add public methods
    public function getPlayer() {

    }

    public function getDealer() {

    }

}