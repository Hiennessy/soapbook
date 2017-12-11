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
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
</head>
<body>
    <div class="container">
        <div class="searchdiv">
            <form id="search-frm" action="functions/functions.php" method="post" autocomplete="off">
                <input type="text" name="search" id="searchinput" placeholder="enter soap name to search">
                <button class="btn" id="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="btndiv">
            <!-- <button class="btn" id="search-btn">Search</button> -->
            <button class="btn" id="add-rcp">Add Recipe</button>
            <button class="btn" id="all-rcp">See All Recipes</button>
        </div>
        <div class="box" id="testdiv">
        </div>
    </div>
</body>
<script src="scripts/scripts.js"></script>
<script>
    
var $searchbar = document.getElementById("searchinput");
var $searchbtn = document.getElementById("search-btn");
var $addbtn    = document.getElementById("add-rcp");
var $allbtn    = document.getElementById("all-rcp");
var $testdiv   = document.getElementById("testdiv");

// On keyup after typing in search input, run function that will check if searchbar is empty or not
// If not, then call ajaxSuggest function
$searchbar.addEventListener("keyup", function() {
                             if ($searchbar.value == "") {
                                $testdiv.style.display = "none"; 
                             } else {
                                  ajaxSuggest();
                               } 
}); 

</script>
</html>