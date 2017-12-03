SELECT recipes.id as 'ID',
       soaps.id as 'Soap ID',
       soaps.name as 'Soap Name',
       ingredients.name as 'Ingredient',
       recipes.ingredient_amt as 'Amount',
       units.name as 'Unit'
FROM      recipes
LEFT JOIN soaps
ON        recipes.soap_id = soaps.id
LEFT JOIN ingredients
ON        recipes.ingredient_id = ingredients.id
LEFT JOIN units
ON        recipes.unit_id = units.id;