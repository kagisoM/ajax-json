<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kagiso School</title>
    <!-- Bootstrap -->
    <link href = "css/bootstrap.min.css" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	<link href = "css/style.css" rel="stylesheet">
	<script type = "text/javascript" src = "js/script.js"></script>
    <script type = "text/javascript" src = "js/jquery-3.2.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<script src = "js/jquery.js"></script>
  <style>
  .hide-me {
    visibility: hidden;
  }
  </style>
  </head>
  <body>
    <header>
      <h1>JSON and AJAX</h1>
      <button id = "btn">Fetch Info for 3 New Animals</button>
    </header>
    <div id = "animal-info">
    </div>
  	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type = "text/javascript">
  var pageCounter = 1;
  var amimalContainer = document.getElementById("animal-info");
  var btn = document.getElementById("btn");
  btn.addEventListener("click", function(){
     var ourRequest = new XMLHttpRequest();
     ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + pageCounter +'.json');
     ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
      renderHTML(ourData);
    };
    ourRequest.send();
    pageCounter++;
    if(pageCounter > 3){
      btn.classList.add("hide-me");
    }
  });

  function renderHTML(data) {
    var htmlString = "";
    for (i = 0; i < data.length; i++) {
      htmlString += "<p>" + data[i].name + " is a "+ data[i].species+".</p>";
    }
    amimalContainer.insertAdjacentHTML('beforeend', htmlString);
  }
   
    
	</script>
  </body>
</html>