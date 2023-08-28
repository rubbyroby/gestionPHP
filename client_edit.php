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
        $cc = $_POST['txt1'];
        $sql = "select * from client where code_client=" . $cc;
        $table = $conx->query($sql);

        if ($table->rowCount() == 0) {
        ?>
                le code <?php echo $cc ?> n'existe pas<br /><br/><br/><br/>
                Retour à <a href="client_lister.php">la liste des clients</a><br/><br/>
                Retour au <a href="client_formedit.php">formulaire de saisie</a><br/><br/>
        <?php
        } else
            while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <form method="POST" action="client_saveedit.php">
                    <h1>modifier les information d'un client</h1>
                        <label>le code du client : </label>
                            <input type="text" name="txt1" required="" value="<?php echo $row['code_client'] ?> ">
                        <label>le nom du client : </label>
                            <input type="text" name="txt2" required="" value="<?php echo $row['nom_client'] ?>">
                        <label>la date de naissance du client:</label>	
                            <input type="text" name="txt3" required="" value="<?php echo $row['date_naissance'] ?> ">						
                                <input type="submit" value="Sauvegarder" />

            </form>
        <?php
            }
        ?>
        </table>
    </body>

</html>