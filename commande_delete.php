<?php
require("config.php");

try {
	$conx = new PDO("mysql:host=$host;dbname=$dbname", $Login, $PW);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>
<html>

    <head>
        <link rel="stylesheet" href="cssphp.css" />
        <meta charset="UTF-8" />
    </head>

    <body>
        <?php
        $ccm = $_POST["txt1"];
        $sql = "delete from commande where code_commande=" . $ccm;

        $resultat = $conx->query($sql);
        if ($resultat == false) {
            echo "Erreur!! <a hreaf='commande_formedit.php'>retour au formulaire de saisie</a>";
        } else {
            header("location:commande_lister.php");
        }
        ?>
    </body>

</html>