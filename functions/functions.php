<?php
/*****************************
 * function name: mysql 
 * 
 * This function makes a mysql connection, runs a query and returns the query 
 * 
 * 
 *****************************/
function mysql($query) {

   $hostname = "localhost";
   $username = "root";
   $password = "password";
   $db       = "soapbook";


// Create connection (OOP method)
   $conn = new mysqli($hostname, $username, $password, $db);

// Check connection (with OOP method)
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   //echo "Connected successfully!";

// Run query
   $qryReturn = mysqli_query($conn, $query);

// Close connection
   $conn->close();
// Return results
   return $qryReturn;

}

/*****************************
 * function name:  
 * 
 * 
 * 
 * 
 *****************************/

?>
