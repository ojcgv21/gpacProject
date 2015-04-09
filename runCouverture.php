#Telacomes
 <!DOCTYPE html>
<html>

<head>
	<title>Lcov pour GPAC</title>
	<link href="style.css" rel="stylesheet">
</head>
<nav id="nav01"></nav>
<body>
	<div id="main">
	  <h1>Lcov pour GPAC</h1>
	  <p>Les resultats sont disponiles dans l'onglet COUVERTURE DU CODE.</p>
	  <p>Cliquez sur l'onglet <b>COMMANDES A EXECUTER</b> si vous voulez executer des commandes en plus.</p>
	</div>
<script src="script.js"></script>
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/html/runCouverture.sh");
}
?>
</body>
</html> 
