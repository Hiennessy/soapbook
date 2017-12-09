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
 * function name: ajaxRequest
 *
 * description:   This function confirms an ajax request, then takes 
 *                all POST data and checks for type of data
 *                to determine if it is a search suggestion 
 *                a search bar submit, add recipe submit, or see all recipe
 *                submit 
 * parameters: none
 *
 * return: json data
 *****************************************************************************/
function ajaxRequest() {
  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {

    // $input_text = isset($_POST['search']) ? $_POST['search']: 'did not work';
    $input_text = $_POST['name'];
    echo json_encode(array('search'=>$input_text));
    
  } else {

    // echo json_encode(array('search'=>'Error'));
    $input_text = $_POST['name'];
    echo json_encode(array('search'=>$input_text));

  }

}

// run ajaxRequest function as soon as this page is called
ajaxRequest();
?>
