<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (empty($gameWin)){?>
    <h1 style="color: red; text-align: center;">O.F.E.G.A.T</h1>
    <a href="/logout.php">Volver a intentar</a>
<?php }else{?>
    <h1 style="color: green; text-align: center;">Has guanyat</h1>
    <a href="/logout.php">Volver a jugar</a>
<?php }?>
</body>
</html>
