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
        if (contrasenyaSegura($contrasenya)){
            echo 'La contasenya es segura';
        }else{
            echo 'La contasenya no es segura';
        }
        ?>
    </h2>
</header>
<?php
print_r(insert($nomTaula,$traduccions));
?>
</body>
</html>
