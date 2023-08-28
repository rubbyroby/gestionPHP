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
        $sql = "select * from commande";
        $table = $conx->query($sql);
        ?>

        <h1>Bonjour Madame sadouk et Monsieur haris</h1>
            <table>
                <tr>
                    <td> code commande</td>
                    <td> nom client</td>
                    <td> date de la commande </td>
                </tr>           
        
            <?php
			while ($row = $table->fetch(PDO::FETCH_ASSOC)) {
			?>

                <tr>
					<td><?php echo $row['code_commande'] ?> </td>
					<td><?php echo $row['code_client'] ?> </td>
					<td><?php echo $row['date'] ?> </td>
				</tr>

            <?php
            }
            ?>
            </table>

    </body>
</html>