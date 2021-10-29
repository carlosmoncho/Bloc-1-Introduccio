<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<br>
<br>
<br>
<form method="POST" action="/IndexAct6.php">
    <div class="form-group">
        <label for="inputletra">Letra:</label>
        <input name="letra" type="text" class="form-control" id="inputletra" aria-describedby="inputletra" placeholder="Letra"  >
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php
if (!empty($errors)){
    foreach ($errors as $error):?>
        <p><?=$error?></p>
    <?php endforeach;?>
<?php }?>
<a href="/logout.php">logout</a>
</body>
</html>