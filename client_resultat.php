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
        $cc = $_POST['txt1'];
        $sql = "select * from client where code_client=" . $cc;
        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {

        ?>

            le code <?php echo $cc ?> n'existe pas<br /><br /><br /><br />
            Retour à <a href="stagiaire_lister.php">la liste des clients</a><br /><br />
            Retour au <a href="stagiaire_formedit.php">formaulaire de saisie</a><br /><br />

        <?php

        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <h1>le client avec le code: <?php echo $cc ?></h1>
                    <label> le code du client:</label>
                    <input type="text" name="txt1" required="" value="<?php echo $row['code_client'] ?> " readonly="readonly">           
                    <label> le nom de client :</label>
                    <input type="text" name="txt2" required="" value="<?php echo $row['nom_client'] ?>" readonly="readonly">
                    <label> la date de naissance  :</label>
                    <input type="text" name="txt3" required="" value="<?php echo $row['date_naissance'] ?> " readonly="readonly">

        <?php
            }
        ?>
        </table>
    </body>

</html>