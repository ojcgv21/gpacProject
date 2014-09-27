
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
	  <p>Vous venez d'effacer tous les fichiers gcda et gcno</p>
	  <p>Pour recommencer les tests de couverture du code vous devez recompiler GPAC, cliquez ici: </p>
	  <a href="updateGpac.php?run=true">Update Gpac</a>
	</div>
<script src="script.js"></script>
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/html/resetCouverture.sh");
}
?>
</body>
</html> 
