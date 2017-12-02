<!DOCTYPE html>
<html lang="en">
<head>
<title>RCFA Tools</title>
<style>

a {
  text-decoration: none;
  color: black;
}
header {
  text-align:center;
  color: #009add;
}

.flex-container {
  display: flex;
  background-color: lightgrey;
  justify-content: center;
  flex-wrap: wrap;
}

.flex-card {
  width: 200px;
  height: 250px;
  margin: 10px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-color: white;
  text-align: center;
}

.flex-card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  background-color: grey;
  color: white;
}

.card-title {
  position:relative;
  margin: 0;
  top: 100px;
}

.modal-box {
    position: fixed;
  	font-family: Arial, Helvetica, sans-serif;
  	top: 0;
  	right: 0;
  	bottom: 0;
  	left: 0;
  	background: rgba(0,0,0,0.7);
  	z-index: 99999;
  	/*opacity: 1;*/
    display: block;
  	transition: opacity 400ms ease-in;
  	/*pointer-events: none;*/
}

.modal-box:target {
    opacity: 1;
    /*pointer-events: auto;*/
}


.modal-box > div {
  width: 500px;
  height: 400px;
  position: relative;
  top: 200px;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
}

.close {
  background: red;
	color: white;
	line-height: 25px;
	position: absolute;
	right: 12px;
	text-align: center;
	top: 12px;
	width: 45px;
	text-decoration: none;
	font-weight: bold;
	border-radius: 12px;
	box-shadow: 1px 1px 3px #000;
}

.close:hover {
  background: #009add;
  color: red;
}

#ttf-container {
  position: relative;
  top: 30px;
  margin: 20px;
  padding: 20px;
  text-align: center;
}

#result {
  width: 290px;
  text-align: center;
  display: block;
  position: relative;

}

</style>
<script type="text/javascript">
var button = document.getElementById('subButton');
var orgButtonVal = button.value;

button.addEventListener("click", function(event) {
  event.preventDefault();
  calculateTTF();
});

var result = document.getElementById("result");
var ttf_hr = document.getElementById("ttf_hr");
var ttf_dy = document.getElementById("ttf_dy");
var ttf_yr = document.getElementById("ttf_yr");


function calculateTTF() {
  clearResult();
  disableSubmit();
  showSpinner();

  var spinner = document.getElementById("spinner");
  var form = document.getElementById("ttf-form");
  var action = form.getAttribute("action");
  var form_data = new FormData(form);  // create FormData object, returns form name attributes

  // Create Ajax request, send, and receive.
  var xhr = new XMLHttpRequest();
  xhr.open('POST', action, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.send(form_data);
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      var result = xhr.responseText;
      hideSpinner();
      enableSubmit();
      var json = JSON.parse(result); // turn response to JSON
      postResult(json.ttf);
    }
  }
}

function clearResult() {
  ttf_hr.innerHTML = '';
  result.style.display = 'none';
}

function disableSubmit() {
  button.disabled = true;
  button.value = 'Calculating...';
}

function enableSubmit() {
  button.disabled = false;
  button.value = orgButtonVal;
}

function showSpinner() {
    spinner.style.display = 'block';
}

function hideSpinner() {
    spinner.style.display = 'none';
}

function postResult(value) {
      var hrs = value;
      var dys = (value)/24;
      var yrs = dys/365;
    if (value == 0) {
      ttf_hr.innerHTML = "N/A (reason)";
      ttf_dy.innerHTML = "N/A (reason)";
      ttf_yr.innerHTML = "N/A (reason)";
    }
    else {
      ttf_hr.innerHTML = hrs + ' hours';
      ttf_dy.innerHTML = dys + ' days';
      ttf_yr.innerHTML = Math.round((yrs+0.00001) * 100) / 100 + ' years';
    }
  result.style.display = 'block';
}
</script>
</head>
<body>
  <header>
    <h1>RCFA Tools</h1>
  </header>
<hr>
<div class="flex-container">
<a href="#ttfmodal">
  <div class="flex-card" id="ttf-card">
    <h3 class="card-title">TTF Calculator</h3>
  </div>
</a>

<!--  Add new cards here
<a href="">
  <div class="flex-card" id="">
    <h3 class="card-title"></h3>
  </div>
</a>
<a href="">
  <div class="flex-card" id="">
    <h3 class="card-title"></h3>
  </div>
</a> -->

</div>
<div id="ttfmodal" class="modal-box">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <div id="ttf-container">
      <form id='ttf-form' action='process.php' method='POST'>
       Enter First Date: <input type="datetime" name="firstdate" /><br /><br>
       Enter Last Date:  <input type="datetime" name="lastdate"  /><br /><br>
       <input id="subButton" type="submit" value="Calculate" />
      </form>
    </div>
    <div id="result">
      <br>
          <p>TTF is:<br>
             <span id='ttf_hr'></span><br>
             <span id='ttf_dy'></span><br>
             <span id='ttf_yr'></span>
          </p>
    </div>
  </div>
</div>

</body>
</html>
