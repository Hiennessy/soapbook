SELECT ingredients.id, 
	   ingredients.name as 'Ingredient',  
	   types.id as 'Type ID', 
       types.name as 'Type'
FROM ingredients
LEFT JOIN types
ON ingredients.type_id = types.id;