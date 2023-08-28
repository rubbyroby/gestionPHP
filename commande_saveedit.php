<?php
require ("config.php");
try {
	$conx = new PDO("mysql:host=$host;dbname=$dbname", $Login, $PW);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="cssphp.css">
        <meta charset="utf-8">        
    </head>
    <body>  

	<?php

	$ccm = $_POST["txt1"];
	$cc = $_POST["txt2"];
	$dc = $_POST["txt3"];

	$sql = "update commande set code_client =".$cc.",
	date='". $dc ."' 
	where code_commande=".$ccm;

	$resultat = $conx->query($sql);
	if ($resultat == false) {
		echo "Erreur!! L'ajout a echoue <br/><a href='commande_edit.php'>Retour au formulaire de saisie</a>";
	} else {
		header("location:commande_lister.php");
	}
	?>
	</body>  
</html>