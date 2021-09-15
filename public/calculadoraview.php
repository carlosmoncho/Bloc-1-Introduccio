
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
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
        print_r($_GET);
        echo "<br>";
        echo 'suma= '.$suma;
        echo "<br>";
        echo 'resta= '.$resta;
        echo "<br>";
        echo 'multiplicación= '.$multiplicacion;
        echo "<br>";
        echo 'división= '.$division;
        ?>
    </h2>
</header>
<?php  print_r($_SERVER)?>
</body>
</html>

