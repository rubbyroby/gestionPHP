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

    <form method="POST" action="commande_resultat.php">
        <h1> rechercher une commande</h1>
        <form>
            <label>Saisir le code de la commande à rechercher :</label>
            <input type="text" name="txt1" required="">
            <input type="submit" value="Rechercher" />
        </form>
    </form>

    </body>

</html>