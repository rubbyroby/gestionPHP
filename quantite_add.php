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
    </body>

        <?php
        $q = $_POST["txt1"];
        $cc = $_POST["txt2"];
        $cp = $_POST["txt3"];

        $sql = "insert into ligne_commande values(".$q.",".$cc.",".$cp.")";
        $resultat = $conx->query($sql);

        if ($resultat == false) {
            echo "Erreur!! L'ajout a échoué";
        } else {
            header("location:quantite_lister.php");
        }
        ?>
    </body>
</html>