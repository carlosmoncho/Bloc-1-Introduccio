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
        <b>Formulario</b>
        <br>
        <?php print_r($data);?>
    </h2>
</header>
<div style="background: aliceblue; margin: 50px" class="w-50 p-3">
    <form method="POST" action="formulario.php">
        <div class="form-group">
            <label for="inputnom">Nom:</label>
            <input name="nom" type="text" class="form-control" id="inputnom" aria-describedby="inputnom" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label for="inputdata">Fecha naixement:</label>
            <input name="data" type="date" class="form-control" id="inputdata" aria-describedby="inputdata" placeholder="Fecha naixement">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre" >
            <label class="form-check-label" for="hombre">
                Hombre
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer" >
            <label class="form-check-label" for="mujer">
                Mujer
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="otro" value="otro" >
            <label class="form-check-label" for="otro">
                Otro
            </label>
        </div>
        <div class="form-group">
            <label for="innputHobbies">Elige los hobbies</label>
            <select id="innputHobbies" class="form-control" name="hobbies">
                <?php
                $hobbies = array('musica', 'baloncesto', 'futbol','informatica','nadar');
                foreach ($hobbies as $hobby){
                    ?> <option value=<?=$hobby?>><?=$hobby?></option>
                <?php }?>
            </select>
        </div>
        <div class="custom-file">
            <input type="file" class="foto" id="arxiu" name="arxiu" >
            <label class="custom-file-label" for="validatedCustomFile">Selecciona un archivo</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
