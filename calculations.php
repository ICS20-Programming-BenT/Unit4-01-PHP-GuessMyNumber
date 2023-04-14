<?php

    // Define min and max as constants
    define("MIN", 1);
    define("MAX", 6);

    // Generate random number
    $correctNumber = intval(rand(MIN, MAX));

    // Get the user input for number between 1 and 6
    $guessedNumber = intval($_POST["user-guess"]);

  //if/then statement: if correctNumber is equal to guessedNumber
  if ($correctNumber == $guessedNumber) {
      echo "Congratulations! The number you guessed is correct!";
  }

    //if/then statement: if correctNumber is not equal to guessedNumber
  if ($correctNumber != $guessedNumber) {
      echo "Sorry, you guessed the wrong number. The correct number was $correctNumber. Try again!";
  }
?>

