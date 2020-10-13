<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
//session is started if you don't write this line can't use $_Session global variable

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//require 'Suit.php';
//require 'Card.php';
//require 'Deck.php';
require 'Player.php';
echo '<br>';
require 'Blackjack.php';
echo '<br>';

//Save the instance of the entire `Blackjack`object in the session
$_SESSION['blackjack'] = new Blackjack();

//Step 11: make the form actions work!
//isset — Determine if a variable is declared and is different than NULL
//hit should add a card to the player (to the cards property). --> private array $cards = []
// If this brings him above 21, set the lost property to true

if (isset($_POST['hit'])){
    for ($i = 0; $i < 2; $i++) {
        $player = array_shift($cards);
        echo 'HIT - card for the player';
}

}

whatIsHappening();
?>

<!--Step 10: Use forms to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)-->
<!doctype html>
<body>
<form action="index.php" method="post">
    <input type="submit" name="action" value="hit"><br>
    <input type="submit" name="action" value="stand"><br>
    <input type="submit" name="action" value="surrender"><br>
</form>
</body>

