<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            background-color: #6868b3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h2>

        </h2>
    </header>
        <table border="1">
            <?php foreach ($jugadores as $jugador) {?>
                    <tr>
                        <td><?php print_r($jugador[4])?></td>
                        <td><?php print_r($jugador[7])?></td>
                        <td><?php print_r($jugador[9])?></td>
                        <td><?php print_r($jugador[11])?></td>
                        <td><?php print_r($jugador[10])?></td>
                        <td><?php print_r($jugador[17])?></td>
                    </tr>
                <?php }?>
        </table>
</body>
</html>