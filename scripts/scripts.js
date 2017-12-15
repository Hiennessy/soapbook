var $xhr     = new XMLHttpRequest();                   // Set global xhr object

/*  This function will take the value typed into the search bar
*   and send the value to php by ajax.  PHP will then send back value
*   as a response.  This function will then change the add button inner html
*   to show the type value.  This function will be changed later to return
*   soap name suggestions based on typed input.  PHP will process typed input
*   and return suggestions.  JS will then create a select list of the suggestions
*
*/
function ajaxSuggest() {

  var $searchvalue = $searchbar.value;                       // Get typed value from search input 

  var $form        =  document.getElementById("search-frm");  // Get form DOM object from form id, to get same action
  var $action      =  $form.getAttribute("action");           // Get form action and save in variable

  var $formdata    =  new FormData();                         // Create a form data object to send to server with xhr
  $formdata.append("searchval",$searchvalue);                    // Append typed value from search input into form data object

// Now do ajax request and send form data
// Function below will run when there is an xhr state change

  $xhr.onreadystatechange = function () {
    if($xhr.readyState == 4 && $xhr.status == 200) {  // Confirm http request is done(4) and succeeded(200) 
      var $ajaxResp = $xhr.responseText;              // Set a variable to the server response text
      var $searchval = JSON.parse($ajaxResp);           // Response text is a string in JSON format, use JSON.parse to turn to object
      showSuggest($searchval);                          // Call showSuggest function and give jsonObj as parameter         
    }
  }

  $xhr.open("POST",$action,true);                                // Start http ajax POST request
  $xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');   // Set request headers to let server know it is ajax request
  $xhr.send($formdata);                                          // Send form data object to server with xhr

}

function showSuggest($val) {
  $suggestbox.classList.add("suggest-div--show");
  $suggestbox.innerHTML = $val.searchval;
}