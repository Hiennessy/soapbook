<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
// include 'functions/functions.php';
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
        <div class="search-div">
            <form class="search-div__form" id="search-frm" action="functions/functions.php" method="post" autocomplete="off">
                <input class="search-div__form__input search-div__form__input--whitebg" type="text" name="search" id="search-input" placeholder="enter soap name to search">
                <button class="search-div__form__button search-div__form__button--bluebg" id="search-btn">submit</button>
            </form>
        </div>
        <div class="button-div">
            <button class="button-div__button button-div__button--cyanbg" id="add-rcp">Add Recipe</button>
            <button class="button-div__button button-div__button--cyanbg" id="all-rcp">See All Recipes</button>
        </div>
        <div class="suggest-div" id="suggest">
        </div>
    </div>
</body>
<script src="scripts/scripts.js"></script>
<script>
    
var $searchbar    = document.getElementById("search-input");
var $searchbtn    = document.getElementById("search-btn");
var $addbtn       = document.getElementById("add-rcp");
var $allbtn       = document.getElementById("all-rcp");
var $suggestbox   = document.getElementById("suggest");

// On keyup after typing in search input, run function that will check if searchbar is empty or not
// If not, then call ajaxSuggest function
$searchbar.addEventListener("keyup", function() {
                             if ($searchbar.value == "") {
                                $suggestbox.classList.remove("suggest-div--show"); 
                             } else {
                                  ajaxSuggest();
                               } 
}); 

</script>
</html>