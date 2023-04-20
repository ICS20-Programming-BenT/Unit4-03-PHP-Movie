<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Movie Ratings Webpage in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_green-green.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Movie Ratings and Age</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">

      <!-- Header -->
      <h1>Movie Ratings and Age</h1>

      <!-- Image -->
      <center>
        <img src="./images/movie-image.webp" alt="It's movie time!" width="320" height="200">
      </center>
      <br>

      <!-- Text -->
    <?php echo "<p>Welcome! Have you ever wondered what movie ratings are appropriate for your age? Use this website to verify which movies you are allowed to watch, based on their ratings and your age. Please input your information below:</p>"; ?>
   
      <!-- Form for user input -->
      <?php echo "<h3>Your Input:</h3>"; ?>
      <form action="./results.php" method="post" target="results">
        <label for="age">How old are you?</label>
        <input type="number" step="1" id="user-age" name="user-age" placeholder="Your age..."><br><br>
        <input type="submit" id="button" value="Check" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      </form>
      <br>

      <!-- iFrame -->
      <iframe name="results" id="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>