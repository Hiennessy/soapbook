<?php
//ini_set('disply_errors', 'On'); error_reporting(E_ALL | E_STRICT);
include 'functions/functions.php';

// Send query to MySQL by calling mysql() function
$qry = "SELECT 
        soaps.name as Name, 
        ingredients.name as Ingredient,
        ingredient_amt as Amount,
        units.name as Unit
        FROM recipes
        LEFT JOIN soaps 
        ON recipes.soap_id = soaps.id
        LEFT JOIN ingredients
        ON recipes.ingredient_id = ingredients.id
        LEFT JOIN units
        ON recipes.unit_id = units.id";

$return = mysql($qry);

// Loop through query and load array
while ($row = mysqli_fetch_assoc($return)) {
    $rowArr[] = array (
        'soap_name'  => $row['Name'],
        'ingred'     => $row['Ingredient'],
        'ingred_amt' => $row['Amount'],
        'unit'       => $row['Unit'],
    );
}
?>

<!-- HTML page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soapbook</title>
</head>
<body>
   <div>
   <?php
    // Draw an HTML table with row array values that were filled up from while loop
   echo "<table style='width:100%'>\n";
   echo "<tr>\n";
   echo "<th>Soap Name</th>\n";
   echo "<th>Ingredient</th>\n";
   echo "<th>Ingredient Amount</th>\n";
   echo "<th>Unit</th>\n";
   echo "</tr>\n";
   foreach ($rowArr as $x) {
     echo "<tr>\n" .
     "<td>" .   $x['soap_name']   . "</td>\n" .
     "<td>" .   $x['ingred']      . "</td>\n" .
     "<td>" .   $x['ingred_amt']  . "</td>\n" .
     "<td>" .   $x['unit']        . "</td>\n" .
     "</tr>\n";
   }
   echo "</table>";
   ?>
   </div> 
</body>
</html>