 <!DOCTYPE html>
<html>

<head>
	<title>Lcov pour GPAC</title>
	<link href="style.css" rel="stylesheet">
</head>
<nav id="nav01"></nav>
<?php

// configuration
$url = '';
$file = '/var/www/html/runCommandes.sh';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<body>
	<div id="main">
	  <h1>Lcov pour GPAC</h1>
	  <h2>Voici le script contenant les commandes a executer:</h2>
		<p>Vous pouvez le modifier comme vous voulez </p>
		<form action="" method="post">
		<textarea name="text" rows="20" cols="120"><?php echo htmlspecialchars($text) ?></textarea>
		<input type="submit" />
		<input type="reset" />
		</form>
		<a href="runCommandes.php?run=true">Lancer les commandes a executer</a>
	</div>

</body>
</html> 
