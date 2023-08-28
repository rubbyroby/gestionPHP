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

	$cp = $_POST["txt1"];
	$d = $_POST["txt2"];
	$pu = $_POST["txt3"];


	$sql = "update produit set 
	designation ='".$d."',
	PU='".$pu."' 
	where code_produit=".$cp;

	$resultat = $conx->query($sql);
	if ($resultat == false) {
		echo ("Erreur!! L'ajout a echoue </br> <a href='produit_edit.php'> retour au formualiaire</a>");
	} 
	else {
		header("location:produit_lister.php");
	}
	?>  
	</body>
</html>