<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

if ($_POST) {
    echo $_POST['soapname'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="styles/styles.css"> -->
    <title>Soapbook</title>
</head>
<body>
    <div class="container">
      <div class="item">
       <button id="create-btn">Create Recipe</button>
       <button id="view-btn">View Recipe</button>
      </div> 
      <div class="recipe-form">
          <form method="post" action="index.php">
              <select name="soapname" id="soap">
                  <option value="soap">Lavender</option>
                  <option value="soap">Orange</option>
                  <input type="submit">
              </select>
          </form>
      </div>
    </div>
</body>
</html>