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
        	$sql2 = "select * from commande";
            $table2 = $conx->query($sql2);
        ?>
        <form method="POST" action="commande_add.php">
			<h1> Ajouter une nouvelle commande</h1>
				<label>Saisir le code de la commande: </label>
                <input type="text" name="txt1" required="">
				<label>Saisir le code du client </label>
				<input type="text" name="txt2" required="">
				<label>Saisir la date de la commande : </label>
				<input type="date" name="txt3" required="">
			<input type="submit" value="Sauvegarder" />
		</div>
	</form>
    </body>

</html>