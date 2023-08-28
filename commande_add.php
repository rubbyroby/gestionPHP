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
        $ccm = $_POST["txt1"];
        $cc = $_POST["txt2"];
        $dc = $_POST["txt3"];

        $sql = "insert into commande values(".$ccm.",".$cc.",'".$dc."')";
        $resultat = $conx->query($sql);

        if ($resultat == false) {
            echo "Erreur!! L'ajout a échoué! <a href='commande_formadd.php'>Retour au formulaire de saisie</a>";
        } 
        else {
            header("location:commande_lister.php");
        }
        ?>
    </body>
</html>