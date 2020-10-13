<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//require 'Suit.php';
//require 'Card.php';
//require 'Deck.php';
require 'Player.php';
echo '<br>';
require 'Blackjack.php';
echo '<br>';

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

//Save the instance of the entire `Blackjack`object in the session
$_SESSION['blackjack'] = new Blackjack();
//create a variable
$game = new Blackjack();
$player = $game->getPlayer(); //otherwise undefined

//Step 11: make the form actions work!
//isset — Determine if a variable is declared and is different than NULL

if (!isset($_POST['action'])){
    echo "Game started!";
    $player
}
elseif ($_POST['action'] === 'hit'){
    echo "Hit for player!";
}
elseif ($_POST['action'] === 'stand') {
    echo "Stand for player!";
}
elseif ($_POST['action'] === 'surrender') {
    echo "Sorry you lost!";
    $player->hasLost();
}

$game->showCards();


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

<?php
whatIsHappening();?>