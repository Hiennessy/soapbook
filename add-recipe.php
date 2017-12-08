<?php
ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

if ($_POST) {
    echo 'Post is set </br>';

// Set variables to input data
$soapname = $_POST['soapname'];
$ingredient = $_POST['ingredient'];
$amount = $_POST['amount'];
$unit = $_POST['unit'];
echo $soapname . '</br>';
echo $ingredient . '</br>';
echo $amount . '</br>';
echo $unit . '</br>';

$qry = "SELECT id as 'ingredID'
        FROM ingredients
        WHERE name = '$ingredient'";

$return = mysql($qry);

while ($row = mysqli_fetch_assoc($return)) {
    $ingredarr[] = array (
        'ingred_id' => $row['ingredID']
    );
}

$qry = "SELECT id as 'unitID'
        FROM units 
        WHERE name = '$unit'";

$return = mysql($qry);

while ($row = mysqli_fetch_assoc($return)) {
    $unitarr[] = array (
        'unit_id' => $row['unitID']
    );
}
// print_r($ingredarr);
// foreach ($ingredarr as $x) {
    // echo $x['ingred_id']; 
    // }

    // echo $ingredarr[0]['ingred_id'] . '</br>';
    echo $unitarr[0]['unit_id'] . '</br>';

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Recipe</title>
    <link rel="stylesheet" href="styles/addrecipe-style.css">
</head>
<body>
   <div class="container">
      <form action="add-recipe.php" method="post" autocomplete="off">
         <h1>Add New Recipe</h1>
         <section>
            <h2>Soap information</h2>
            <p>
               <!-- <label for="name">
                  <span>Soap Name: </span>
               </label> -->
               <input type="text" id="soapinput" name="soapname" placeholder="Soap Name">
            </p>
            <p>
               <!-- <label for="ingredient">
                  <span>Ingredient: </span>
               </label> -->
               <input type="text" id="ingredientinput" name="ingredient">
            </p>
            <p>
               <label for="amount">
                  <span>Amount: </span>
               </label>
               <input type="number" id="amountinput" name="amount">
            </p>
            <p>
               <label for="unit">
                  <span>Unit: </span>
               </label>
               <input type="text" id="unitinput" name="unit">
            </p>
            <p>
               <button type="submit">Submit</button>
            </p>
         </section> 
      </form>
   </div> 
</body>
</html>