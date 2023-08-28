<?php

try {
	require ("config.php");
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
        	$sql2 = "select * from client";
            $table2 = $conx->query($sql2);
        ?>
        <form method="POST" action="client_add.php">
			<h1> Ajouter un nouvel client</h1>
				<label>Saisir le code client: </label>
                <input type="text" name="txt1" required="">
				<label>Saisir le nom du client </label>
				<input type="text" name="txt2" required="">
				<label>Saisir la date de naissance du client : </label>
				<input type="date" name="txt3" required="">
			<input type="submit" value="Sauvegarder" />
		</div>
	</form>
    </body>

</html>