
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
        print_r('nom= '.$nomTrim.'<br>'.
            $longitudNom.'<br>'.
            $nomMayus.'<br>'.
            $nomMinus.'<br>'.
            $nomSubstitucio.'<br>'.
            $numeroA.'<br>'.
            $posicionPrimeraA.'<br>'.
            $comparacioNomPrefix.'<br>');
        print_r(parse_url($url, PHP_URL_QUERY).'<br>');
        print_r(parse_url($url, PHP_URL_SCHEME).'<br>');
        print_r(parse_url($url, PHP_URL_USER).'<br>');
        print_r(parse_url($url, PHP_URL_PATH).'<br>');
        ?>
    </h2>
</header>
</body>
</html>
