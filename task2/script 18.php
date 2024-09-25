<?php
$randno= rand(1, 10);
$Guessno = 7;

// Check if the user's guess is correct
if ($Guessno == $randno) {
    echo "Congratulations! correct number: $randno.";
} else {
    echo "Sorry, your guess was incorrect. The correct number was $randno.";
}
?>
