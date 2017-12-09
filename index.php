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
        <div class="searchdiv">
            <form id="search-frm" action="functions/functions.php" method="post" autocomplete="off">
                <input type="text" name="search" id="searchinput" placeholder="enter soap name to search">
            </form>
        </div>
        <div class="btndiv">
            <button class="btn" id="search-btn">Search</button>
            <button class="btn" id="add-rcp">Add Recipe</button>
            <button class="btn" id="all-rcp">See All Recipes</button>
        </div>
    </div>
</body>
<script src="scripts/scripts.js"></script>
<script>
    
var $searchbtn = document.getElementById("search-btn");
$searchbtn.addEventListener("click", ajaxSuggest);

var $addbtn = document.getElementById("add-rcp");
$addbtn.addEventListener("click", ajaxAdd);

</script>
</html>