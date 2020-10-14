<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

session_start(); // put the session behind the require

//Save the instance of the entire `Blackjack`object in the session
if (!isset($_SESSION['blackjack'])) { // if our session Blackjack is not set, then a new game starts
    $_SESSION['blackjack'] = new Blackjack();
}
//create a variable
$game = new Blackjack();

$player = $game->getPlayer(); //otherwise undefined
$dealer = $game->getDealer();
$deck = $game->getDeck();

//Step 11: make the form actions work!
//isset — Determine if a variable is declared and is different than NULL

if (!isset($_POST['action'])) {
    echo "Game started!<br/>";

}
if ($_POST['action'] === 'hit') {
    $player->hit($game->getDeck());
    //echo "<br/>Hit for player!";
    echo $player->getScore();
    echo "<br>";
    if ($player->hasLost()) {
        echo "you lose";
    }
}
if ($_POST['action'] === 'stand') {
    $dealer->hit($game->getDeck());
    echo $dealer->getScore();
    echo "<br>";

    if ($dealer->hasLost()) {
        echo "dealer lost! <br/>";

    } else {
        if ($dealer->getScore() >= $player->getScore()) {
            echo "dealer wins <br/>";
        } else {
            echo "player wins <br/>";
        }
    }
}
if ($_POST['action'] === 'surrender') {
    echo "<br/>Surrender for player so dealer wins!<br/>";
    $player->hasLost();

}
if ($_POST['action'] === 'restart') {
    session_destroy();
    //redirect to the same page = force to start a new page
    header("location:index.php"); // !!code below will still be executed!! solution, add exit
    exit();
    /*in HTML:
    <?php if(!$player->haslost() && !$dealer()->hasLost():?>
    <?php else : ?>
    <input type="submit" name="action" value="restart">
    */
}
?>
<!-- Show result-->
<!doctype html>
<body>
<div>
    <br>
    Your cards:
    <span style="font-size: 50px;"</span> <!--normally you make a CSS page!-->
    <?php
    foreach ($player->showCards() as $card) {
        echo $card->getUnicodeCharacter(true);
    }
    ?>
</div>

<div>
    <br>
    Dealer cards:
    <span style="font-size: 50px;"</span> <!--normally you make a CSS page!-->
    <?php
    foreach ($dealer->showCards() as $card) {
        echo $card->getUnicodeCharacter(true);
    }
    ?>
</div>
<!-- Step 10: Use action forms (i.e. hit/stand/surrender)-->
<form action="index.php" method="post">
    <input type="submit" name="action" value="hit">
    <input type="submit" name="action" value="stand">
    <input type="submit" name="action" value="surrender">
</form>
</body>

<?php

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION['blackjack']);
}
//whatIsHappening();
?>
