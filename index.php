<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

if ($_POST) {
    // echo $_POST['spname'] . '</br>';
    // echo $_POST['ingred'] . '</br>';
$soap_name = $_POST['spname'];
echo $soap_name;

$qry = "SELECT
        ingredients.name as 'Ingredient',
        recipes.ingredient_amt as 'Amount',
        units.name as 'Unit'
        FROM recipes
        LEFT JOIN soaps on recipes.soap_id = soaps.id
        LEFT JOIN ingredients on recipes.ingredient_id = ingredients.id
        LEFT JOIN units on recipes.unit_id = units.id
        WHERE soaps.name = '$soap_name'";

$return = mysql($qry);

while ($row = mysqli_fetch_assoc($return)) {
    $ingredarr[] = array (
        'ingredient' => $row['Ingredient'],
        'ingredamt'  => $row['Amount'],
        'unit'       => $row['Unit']
    );
}

// print_r($ingredarr);

}

$qry = "SELECT name as 'Soap'
        FROM soaps";

$return = mysql($qry);

// Loop through query and load array
while ($row = mysqli_fetch_assoc($return)) {
    $soaparr[] = array (
        'soapname' => $row['Soap'],
    );
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
      <!-- <div class="item"> 
       <button id="create-btn">Create Recipe</button>
       <button id="view-btn">View Recipe</button>
      </div> -->
      <div class="recipe-form">
          <form method="post" action="index.php">
                <label for="soapname">Pick soap to see recipe</label>
                <select name="spname" id="soapname">
                  <?php
                  foreach ($soaparr as $x) {
                  echo "<option value='" . $x['soapname'] . "'>" . $x['soapname'] . "</option>";
                  }
                  ?>
                </select>
              <button type='submit'>Submit Now</button>
          </form>
      </div>
      <div class="showrecipe">
      <h1>Here are the ingredients for your chosen soap</h1>
      </br>
      <?php
                  foreach ($ingredarr as $x) {
                  echo $x['ingredient'] . "   " . $x['ingredamt'] . "   " . $x['unit'] . "</br>"; 
                  }
      ?>
      </div>
    </div>
</body>
</html>