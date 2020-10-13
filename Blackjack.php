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
class Blackjack
{

//add 3 private properties
    private $player;
    private $dealer;
    private $deck;

    //objects of a class is created using the "new" keyword
    //methods
    public function __construct()
    {
        //create a new deck object (copied from example.php)
        $deck = new Deck (); //refers to Deck.php
        $deck->shuffle();

        foreach ($deck->getCards() as $card) {
            echo $card->getUnicodeCharacter(true);
            echo '<br>';
        }

        //instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->player = new Player($deck); //refers to Player.php
        $this->dealer = new Player($deck);
    }

    // add public methods
    public function getPlayer(): player
    {
        return $this->player;
    }

    public function getDealer(): dealer
    {
        return $this->dealer;
    }
}
