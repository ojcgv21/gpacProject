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
	  <p>Les commandes ont ete executees.</p>
	  <h2>Cliquez ici pour :</h2>
	  <a href="runCouverture.php?run=true">Lancer la couverture du code</a>
	</div>
<script src="script.js"></script>
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/html/runCommandes.sh");
}
?>
</body>
</html> 
