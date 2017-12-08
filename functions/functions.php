<?php
/******************************************************************************
 * function name:  mysql
 * 
 * description:    This function creates a mysql connection
 *                 and takes in a query string as a parameter
 *                 It will then run the query and return the results 
 * 
 * parameters:     $query (this is a query string)
 * 
 * return:         The function will return the mysql database query results 
 *****************************************************************************/
function mysql($query) {

  $hostname = "localhost";
  $username = "root";
  $password = "password";
  $db       = "soapbook";


// Create connection (OOP method)
  $conn = new mysqli($hostname, $username, $password, $db);

// Check connection, if fail, then die and return error message
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

// Run query
  $qryReturn = mysqli_query($conn, $query);

// Close connection
  $conn->close();

// Return results
  return $qryReturn;

}

/******************************************************************************
 * function name:
 *
 * description:
 *
 * parameters:
 *
 * return:
 *****************************************************************************/

?>
