<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Welcome at the Blackjack game!<br/>';

//create a class called Blackjack
class Blackjack
{

//add 3 private properties
    private Player $player; // add type hinting
    private $dealer;
    private Deck $deck;

    //objects of a class is created using the "new" keyword
    //methods
    public function __construct()
    {
        //create a new deck object (copied from example.php)
        $deck = new Deck(); //refers to Deck.php
        $deck->shuffle();
        $this->deck=$deck; ////$this->deck ipv $deck!!!

        //instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
    }

    // add public methods
    public function getPlayer()
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->dealer;
    }

    //Alt+insert+getter+deck (otherwise it doesn't recognise)
    public function getDeck()
    {
        return $this->deck;
    }

    public function showCards()
    {
        $this->player->showCards();
    }

}
