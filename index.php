<!DOCTYPE html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Maintenance Page</title>
	<link rel="stylesheet" media="all" href="assets/style.css" />
	<script>
		document.addEventListener('DOMContentLoaded', function(event) {  loadEta();  });
	</script>
</head>

<body>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<div id="maintenance-page">
		<h1 class="nl_open-sans">Deployment is processing!</h1>
		<img width="350px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Web-maintenance.png/800px-Web-maintenance.png">
		<p>Site will be back after a few minutes...
			<br />
			<br />
			We expect to be finished it by <span id="eta">10 AM</span>
			<br />
			<br />
		We apologize for any inconvenience.</p>
	</div>
<script>
function loadEta() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var eta = JSON.parse(this.responseText);
		if (eta.message) {
		 var time = eta.data.eta;
		}
      document.getElementById("eta").innerHTML = time;
    }
  };
  xhttp.open("GET", "ajax/eta.php", true);
  xhttp.send();
}
</script>

</body>
