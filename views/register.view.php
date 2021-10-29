<div style="background: aliceblue; margin: 50px" class="w-50 p-3">
    <?php
    if (!empty($errors)){
        foreach ($errors as $error):?>
            <p><?=$error?></p>
        <?php endforeach;?>
    <?php }?>
    <form method="POST" action="/register.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputnombreUsuario">Nom de usuari:</label>
            <input name="user" type="text" class="form-control" id="inputusnombreUsuario" aria-describedby="inputunombreUsuario" placeholder="Nom usuari"  >
        </div>
        <div class="form-group">
            <label for="inputGmail">Correu electronic:</label>
            <input name="email" type="email" class="form-control" id="inputGmail" aria-describedby="inputGmail" placeholder="Correu electronic"  >
        </div>
        <div class="form-group">
            <label for="inputContraseña1">Contrasenya:</label>
            <input name="password" type="text" class="form-control" id="inputContraseña1" aria-describedby="inputContraseña1" placeholder="Contrasenya"  >
        </div>
        <div class="form-group">
            <input name="password2" type="text" class="form-control" id="inputContraseña2" aria-describedby="inputContraseña2" placeholder="Contraseña comprovació"  >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <form class="d-flex" action="/login.php">
        <button class="btn btn-outline-dark" type="submit">
            <i class="bi bi-person"></i>
            Login
        </button>
    </form>
</div>