<?php
require ("config.php");
try {
    
	$conx = new PDO("mysql:host=$host;dbname=$dbname", $Login, $PW);
} 
catch (PDOException $e) {
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

        $sql = "insert into client values(".$cc.",'".$nc."','".$dn."')";
        $resultat = $conx->query($sql);

        if ($resultat == false) {
            echo ("Erreur!! L'ajout a echoue<br/><a href='client_formadd.php'>Retour au formulaire de saisie</a>");
        } 
        else {
            header("location:client_lister.php");
        }
        ?>
    </body>
</html>