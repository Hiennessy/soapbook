function ajaxSuggest() {

   var $form = document.getElementById("search-frm");
   var $action = $form.getAttribute("action");
   var $form_data = new FormData($form);  // create FormData object, returns form name attributes

// Create Ajax request, send, and receive.
   var $xhr = new XMLHttpRequest();
   // set a handler function to run when ready state change occurs
   $xhr.onreadystatechange = function () {
     if($xhr.readyState == 4 && $xhr.status == 200) {
       var $result = $xhr.responseText; // set $result to form data provided by PHP and in JSON format
       var $jsonObj = JSON.parse($result); // convert JSON to actual objects
       changesearch($jsonObj.search);
       // $json should have data returned from PHP, do something with it, like call a function to display, or add recipes...etc.
     }
   }
   $xhr.open('POST', $action, true);
   $xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
   $xhr.send($form_data);

}

function changesearch($text) {

   var $btn = document.getElementById("all-rcp");
   $btn.innerHTML = $text;


}

function ajaxAdd() {

   var $action = "functions/functions.php";
  //  var $string = 'button=add-rcp';

// Create Ajax request, send, and receive.
   var $xhr = new XMLHttpRequest();
   // set a handler function to run when ready state change occurs
   $xhr.onreadystatechange = function () {
     if($xhr.readyState == 4 && $xhr.status == 200) {
       var $result = $xhr.responseText; // set $result to form data provided by PHP and in JSON format
       var $jsonObj = JSON.parse($result); // convert JSON to actual objects
       changesearch($jsonObj.search);
       // $json should have data returned from PHP, do something with it, like call a function to display, or add recipes...etc.
     }
   }
   $xhr.open("POST", $action, true);
   $xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   $xhr.send('name=button');

}