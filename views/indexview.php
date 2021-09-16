<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: blue;
            padding: 2em;
        }


    </style>
</head>
<body>
<header>
    <h2>
        <?= $greetings; ?>
    </h2>
</header>
<?php  print_r($_SERVER)?>
<?php  foreach ($name as $name):?>
    <li><?=$name?></li>
    <?php endforeach;?>
</body>
</html>