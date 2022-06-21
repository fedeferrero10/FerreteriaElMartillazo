<?php include('header.php');?>

<div class="content">
    <a href="admin.php" title="Volver">
        <img alt="Imagen Volver" src="imagenes/volver.png" width="60" height="40" align="right" />
    </a>
    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
    <h2> Sistema de Administración</h2>
    <div class="well well-small">
        <!-- <hr class="soft"/> -->
        <h4>Alta de Usuario</h4>
        <div class="row-fluid">
            <form action="ejecutarAgregar.php" method="post" enctype="multipart/form-data">
                Nombre de Usuario<br> <input type="text" required name="user" value=""><br>
                Contraseña<br> <input type="Password" required name="pass" value=""><br>
                Correo usuario<br> <input type="mail" required name="email" value=""><br>
                Rol<br> <input type="number" required name="rol" value=""><br>
                <br>
                <p>Foto de Perfil <input type="file" placeholder="Foto de Perfil" name="image" /></p>
                <br>
                <input type="submit" value="Aceptar" class="btn">
            </form>
        </div>
    </div>
</div>
</div>
<?php include('footer.php');?>