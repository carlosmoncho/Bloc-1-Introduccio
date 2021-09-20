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
        <?php
        print_r('noms= ');
        mostrar_array($noms);
        print_r('<br>Total noms= '.$numeroElementos.
            '<br>Array implode= '.$cadenaNoms.
            '<br>Noms ordenats= ');
        mostrar_array($nomsOrdenats);
        print_r('<br>Array invers= ');
        mostrar_array($nomsInvers);
        print_r('<br>Alumnes= ');
        print_r($nomAlumnes);
        ?>
    </h2>
</header>
<table border="1">
    <tr>
        <th>DNI</th>
        <th>NOM</th>
        <th>EDAD</th>
    </tr>
    <?php foreach ($alumnes as $fila){?>
    <tr>
        <?php foreach ($fila as $alumn){?>
            <td><?=$alumn?></td>
        <?php }?>
    </tr>
    <?php }?>
</table>
<table border="1">
    <tr>
        <th>Ingles</th>
        <th>Castella</th>
    </tr>
    <?php
    foreach ($traduccions as $ingles => $castella){?>
        <tr>
            <td><?=$ingles?></td>
            <td><?=$castella?></td>
        </tr>
    <?php }?>
</table>
</body>
</html>