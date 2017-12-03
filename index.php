<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

if ($_POST) {
    echo $_POST['spname'] . '</br>';
    echo $_POST['ingred'] . '</br>';
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

$qry = "SELECT name as 'Ingredient'
        FROM ingredients";

$return = mysql($qry);

// Loop through query and load array
while ($row = mysqli_fetch_assoc($return)) {
    $ingredarr[] = array (
        'ingredient' => $row['Ingredient'],
    );
}
// print_r($soaparr);
// print_r($ingredarr);

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
              <input list="soapnames" name="spname">
              <input list="ingredients" name="ingred">
              <datalist id="soapnames"> 
                  <?php
                  foreach ($soaparr as $x) {
                  echo "<option value='" . $x['soapname'] . "'>" . $x['soapname'] . "</option>";
                  }
                  ?>
              </datalist>
              <datalist id="ingredients"> 
                  <?php
                  foreach ($ingredarr as $x) {
                  echo "<option value='" . $x['ingredient'] . "'>" . $x['ingredient'] . "</option>";
                  }
                  ?>
              </datalist>
              <input type='submit'>
          </form>
      </div>
    </div>
</body>
</html>