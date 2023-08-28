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

	$cc = $_POST["txt1"];
	$nc = $_POST["txt2"];
	$dn = $_POST["txt3"];

	$sql = "update client set nom_client ='" . $nc . "',date_naissance='" . $dn . "' where code_client=" . $cc;

	$resultat = $conx->query($sql);
	if ($resultat == false) {
		echo "Erreur!! L'ajout a echoue";
	} else {
		header("location:client_lister.php");
	}
	?>
    </body>
  
</html>