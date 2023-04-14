<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Guess My Number with PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Web page title -->
    <title>Guess My Number with PHP</title>
  </head>
  <body>
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
      <?php echo "<h1>Guess My Number!</h1>"; ?>
  
      <!-- Text -->
      <?php echo "<p>I have taken the liberty of generating a random number between 1 and 6. This page will allow you to guess my number. Type your guess in the input box below.</p>"; ?>
  
      <!-- Form for user input -->
      <form action="./calculations.php" method="post" target="result">
        <label for="userGuess">Input any number between 1 and 6:</label>
        <input type="number" step="1" id="user-guess" min="1" max="6" placeholder="Guess..." name="user-guess"><br><br>
        <input type="submit" value="Check your answer!" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
      <br>
  
      <!-- iframe -->
      <iframe id="result" name="result"></iframe>
      <br>
  
      <!-- Image -->
      <img src="./images/random-numbers.png" alt="Numbers">
    </main>
  </body>
</html>