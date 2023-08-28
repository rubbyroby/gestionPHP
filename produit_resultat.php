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
    </head>

    <body>
        <?php
        $cp = $_POST['txt1'];
        $sql = "select * from produit where code_produit=" . $cp;
        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {

        ?>

            le code <?php echo $cp ?> n'existe pas<br /><br /><br /><br />
            Retour à <a href="produit_lister.php">la liste des produits</a><br /><br />
            Retour au <a href="produit_formedit.php">formaulaire de saisie</a><br /><br />

        <?php

        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <h1>le produit avec le code: <?php echo $cp ?></h1>
                    <label> le code du produit:</label>
                    <input type="text" name="txt1" required="" value="<?php echo $row['code_produit'] ?> " readonly="readonly">           
                    <label> la designantion :</label>
                    <input type="text" name="txt2" required="" value="<?php echo $row['PU'] ?>" readonly="readonly">
                    <label> le prix unitaire :</label>
                    <input type="text" name="txt3" required="" value="<?php echo $row['designation'] ?> " readonly="readonly">

        <?php
            }
        ?>
        </table>
    </body>

</html>