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
        $cc = $_REQUEST['Ref'];
        $sql = "select * from client where code_client=" . $cc;

        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {
        ?>
            le code <?php echo $ns ?> n'existe pas<br /><br /><br /><br />
            Retour à <a href="client_lister.php">la liste des clients</a><br /><br />
            Retour au <a href="client_formedit.php">formaulaire de saisie</a><br /><br />
        <?php
        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <form method="POST" action="client_saveedit.php">
                <h2>le client avec le code <?php echo $cm ?></h2>
                le code du client : 
                <input type="text" name="txt1" required="" value="<?php echo $row['code_client'] ?> " readonly="readonly">
                le nom du client :
                <input type="text" name="txt2" required="" value="<?php echo $row['nom_client'] ?>" readonly="readonly">
                la date de naissance du client: 
                <input type="text" name="txt3" required="" value="<?php echo $row['date_naissance'] ?> " readonly="readonly">
                    <input type="submit" value="Supprimer" />
            </form>
            <?php
                }
            ?>
            </table>
    </body>

</html>