<?php
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
      <form action="add-recipe.php" method="post">
         <h1>Add New Recipe</h1>
         <section>
            <h2>Soap information</h2>
            <p>
               <label for="name">
                  <span>Soap Name: </span>
               </label>
               <input type="text" id="name" name="username">
            </p>
            <p>
               <label for="mail">
                  <span>Ingredient: </span>
               </label>
               <input type="email" id="mail" name="usermail">
            </p>
            <p>
               <label for="pwd">
                  <span>Amount: </span>
               </label>
               <input type="password" id="pwd" name="password">
            </p>
            <p>
               <label for="unit">
                  <span>Unit: </span>
               </label>
               <input type="password" id="unit" name="password">
            </p>
         </section> 
      </form>
   </div> 
</body>
</html>