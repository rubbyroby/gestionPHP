<?php
require("config.php");

try {
	$conx = new PDO("mysql:host=$host;dbname=$dbname", $Login, $PW);
} 
catch (PDOException $e) {
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
        $cp = $_POST["txt1"];
        $sql = "delete from produit where code_produit=" . $cp;

        $resultat = $conx->query($sql);
        if ($resultat == false) {
            echo "Erreur!! L'ajout a échoué";
        } else {
            header("location:produit_lister.php");
        }
        ?>
    </body>

</html>