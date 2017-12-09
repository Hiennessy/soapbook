function ajaxSearch() {

   var $form = document.getElementById("search-frm");
   var $action = $form.getAttribute("action");
   var $form_data = new FormData($form);  // create FormData object, returns form name attributes

// Create Ajax request, send, and receive.
   var $xhr = new XMLHttpRequest();
   // set a handler function to run when onreadystatechange occurs
   $xhr.onreadystatechange = function () {
     if($xhr.readyState == 4 && $xhr.status == 200) {
       var $result = $xhr.responseText; // set $result to form data provided by PHP and in JSON format
       var $json = JSON.parse($result); // convert JSON to actual objects
       // $json should have data returned from PHP, do something with it, like call a function to display, or add recipes...etc.
     }
   }
   $xhr.open('POST', $action, true);
   $xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
   $xhr.send($form_data);
}