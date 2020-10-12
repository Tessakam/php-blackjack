<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


//create a class called Player
class Player {

    //Make it require the Deck object.
    function __construct($deck) {

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