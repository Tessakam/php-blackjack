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

    //Make it require the Deck object, pass this Deck from the Blackjack constructor.
    public function __construct(Deck $deck)
    {
        //Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        array_push($this->cards, $deck->drawCard());
        array_push($this->cards, $deck->drawCard());

        if ($this->getScore() > 21) {
            $this->lost = true;
        }
    }

    // add public methods
    public function hit(Deck $deck)
    {
        $nextCard = array_push($this->cards, $deck->drawCard());
        array_push($this->cards, $nextCard);
        //separate [] is not necessary, already created in private properties!
    }

    public function surrender()
    {
        $this->lost = true;
    }

    public function getScore()
    {
        //$score = 0;
        //for($i = 0;$i <count($this->cards)
    }

    public function hasLost()
    {
        $this->lost = true;
    }

    public function showCards()
    {
        foreach ($this->cards as $card) {
            echo $card->getUnicodeCharacter(true);
            echo '<br>';
        }
    }
}

/* class Dealer extends Player
public function hit(deck $deck)
while ($this->getScore() < 15 }
parent::hit($deck);
}
*/


