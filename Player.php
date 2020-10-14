<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo 'Hello Player!<br/>';

//create a class called Player
class Player
{
    //add 2 private properties
    private array $cards = [];
    private bool $lost = false;

    /* @var card[] */

    //Make it require the Deck object, pass this Deck from the Blackjack constructor.
    public function __construct(Deck $deck)
    {
        //Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        array_push($this->cards, $deck->drawCard());
        array_push($this->cards, $deck->drawCard());
        //Also possible: array_push($this->cards, $deck->drawCard(), $deck->drawCard());

        if ($this->getScore() > 21) {
            $this->lost = true;
        }
    }

    // add public methods
    public function hit(Deck $deck)
    {
        $nextCard = $deck->drawCard();
        array_push($this->cards, $nextCard);
        //separate [] is not necessary, already created in private properties!

        if ($this->getScore() > 21) {
            $this->lost = true;
        }
    }

    public function surrender()
    {
        $this->lost = true;
    }

    public function getScore()
    {
        $score = 0;
        foreach ($this->cards as $card) {
            $score += $card->getValue();
        } //tip @var card[] shows which values are available
        return $score;
    }

    public function hasLost()
    {
        $this->lost = true;
    }

    public function showCards()
    {
        foreach ($this->cards as $card) {
            echo $card->getUnicodeCharacter(true);
        }
    }
}

class Dealer extends Player
{
    public function hit(Deck $deck)
    {
        while ($this->getScore() < 15)
            parent::hit($deck); //using the old hit function
    }
}




