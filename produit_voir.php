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
        $ccm = $_REQUEST['Ref'];
        $sql = "select * from produit where code_produit=" . $cp;

        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {
        ?>
            le code <?php echo $ns ?> n'existe pas<br /><br /><br /><br />
            Retour à <a href="produit_lister.php">la liste des produits</a><br /><br />
            Retour au <a href="produit_formedit.php">formaulaire de saisie</a><br /><br />
        <?php
        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <form method="POST" action="produit_saveedit.php">
                <h2>le produit avec le code <?php echo $cm ?></h2>
                le code du produit : 
                <input type="text" name="txt1" required="" value="<?php echo $row['code_produit'] ?> " readonly="readonly">
                le prix unitaire :
                <input type="text" name="txt2" required="" value="<?php echo $row['PU'] ?>" readonly="readonly">
                la designantion: 
                <input type="text" name="txt3" required="" value="<?php echo $row['designantion'] ?> " readonly="readonly">
                    <input type="submit" value="Supprimer" />
            </form>
            <?php
                }
            ?>
            </table>
    </body>

</html>