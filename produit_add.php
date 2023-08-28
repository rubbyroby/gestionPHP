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

        $sql = "insert into produit values(".$cp.",'".$d."','".$pu."')";
        $resultat = $conx->query($sql);

        if ($resultat == false) {
            echo ("Erreur!! L'ajout a échoué </br> <a href='produit_formadd'>retour au formulaire</a>");
        } else {
            header("location:produit_lister.php");
        }
        ?>
    </body>
</html>