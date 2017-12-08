<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Soapbook</title>
</head>
<body>
    <div class="container">
        <div class="searchdiv">
            <form action="">
                <input type="text" name="search" id="searchinput" placeholder="search for soap">
                <!-- <button type="submit" id="search-btn">Search</button> -->
            </form>
        </div>
        <div class="btndiv">
            <button id="add-rcp">Add Recipe</button>
            <button id="all-rcp">See All Recipes</button>
        </div>
    </div>
</body>
</html>