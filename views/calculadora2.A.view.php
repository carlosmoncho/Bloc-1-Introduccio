
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
        <b>Calculadora</b>
        <?php
        if (!empty($errors)){
        foreach ($errors as $error):?>
            <p><?=$error?></p>
        <?php endforeach;?>
        <?php }?>
        <br>
        <?php if (!empty($resultado)){
            echo $resultado;
        }?>
    </h2>
</header>
<div style="background: aliceblue; margin: 50px" class="w-50 p-3">
    <form method="POST" >
        <div class="form-group">
            <label for="inputY">Introduce la Y</label>
            <input name="Y" type="number" class="form-control" id="inputY" aria-describedby="inputY" placeholder="Introduce la Y" >
        </div>
        <div class="form-group">
            <label for="inputX">Introduce la X</label>
            <input name="X" type="number" class="form-control" id="inputX" aria-describedby="inputX" placeholder="Introduce la X" >
        </div>
        <div class="form-group">
            <label for="inputFuncion">Elige una funcion</label>
            <select id="inputFuncion" class="form-control" name="funcion">
                <option value="suma">suma</option>
                <option value="resta">resta</option>
                <option value="multiplicacio">multiplicación</option>
                <option value="divisio">división</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>