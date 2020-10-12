<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Hello Blackjack.php';
require 'Suit.php';
require 'Card.php';
require 'Deck.php';

//create a class called Blackjack
class Blackjack {

//add 3 private properties
    private $player;
    private $dealer;
    private $deck;

    //objects of a class is created using the "new" keyword
    //methods
    function __construct() {
        //instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->player = new Player; //refers to Player.php
        $this->dealer = new Player;
        //create a new deck object
        $this->deck = new Deck; //refers to Deck.php
        $this->deck = shuffle($cards);
    }

    //Save the instance of the entire `Blackjack`object in the session



    // add public methods
    public function getPlayer() {

    }

    public function getDealer() {

    }

}