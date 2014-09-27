
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
	  <p>La mise a jour du GPAC vient de finir.</p>
	  <p>Cliquez sur l'onglet <b>COMMANDES A EXECUTER</b> pour afficher la page qui contient ces commandes, et le lien pour executer la couverture du code.</p>
	</div>
<script src="script.js"></script>
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/html/updateGpac.sh");
}
?>
</body>
</html> 
