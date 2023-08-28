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
        	$sql2 = "select * from produit";
            $table2 = $conx->query($sql2);
        ?>
        <form method="POST" action="produit_add.php">
			<h1> Ajouter un nouvel produit</h1>
				<label>Saisir le code produit: </label>
                <input type="text" name="txt1" required="">
				<label>Saisir la designation : </label>
				<input type="text" name="txt2" required="">
				<label>Saisir le prix unitaire </label>
				<input type="text" name="txt3" required="">
				
			<input type="submit" value="Sauvegarder" />
		</div>
	</form>
    </body>

</html>