
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
        echo calcular($x,$y,$funcio);
        ?>
    </h2>
</header>
<?php
print_r($_SERVER["SERVER_ADDR"]."<br>");
print_r($_SERVER["QUERY_STRING"]."<br>");
print_r($_SERVER["SCRIPT_FILENAME"]);
?>

</body>
</html>

