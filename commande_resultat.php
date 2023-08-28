<?php
require ("config.php");
try {
	$conx = new PDO("mysql:host=$host;dbname=$dbname", $Login, $PW);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>
?>
<html>

    <head>
        <link rel="stylesheet" href="cssphp.css" />
    </head>

    <body>
        <?php
        $ccm = $_POST['txt1'];
        $sql = "select * from commande where code_commande=" . $ccm;
        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {

        ?>

            le code <?php echo $ccm ?> n'existe pas<br /><br /><br /><br />
            Retour à <a href="commande_lister.php">la liste des commandes</a><br /><br />
            Retour au <a href="commande_formedit.php">formaulaire de saisie</a><br /><br />

        <?php

        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <h1>la commande avec le code: <?php echo $ccm ?></h1>
                    <label> le code de la commande:</label>
                    <input type="text" name="txt1" required="" value="<?php echo $row['code_commande'] ?> " readonly="readonly">           
                    <label> le code client:</label>
                    <input type="text" name="txt2" required="" value="<?php echo $row['code_client'] ?>" readonly="readonly">
                    <label> la date de la commande :</label>
                    <input type="date" name="txt3" required="" value="<?php echo $row['date'] ?> " readonly="readonly">

        <?php
            }
        ?>
</body>
</html>