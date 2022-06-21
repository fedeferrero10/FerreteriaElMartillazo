<?php include('header.php');?>

<div class="content">
    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
    <a href="admin.php" title="Volver">
        <img alt="Imagen Volver" src="imagenes/volver.png" width="60" height="40" align="right" />
    </a>
    <h2> Sistema de Administración</h2>
    <div class="well well-small">
        <!-- <hr class="soft"/> -->
        <h4>Modificación de usuario</h4>
        <div class="row-fluid">

            <?php
						extract($_GET);
						require("DBConnect.php");

						$sql="SELECT * FROM users WHERE id=$id";
					//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
						$ressql=mysqli_query($mysqli,$sql);
						while ($row=mysqli_fetch_row ($ressql)){
								$id=$row[0];
								$user=$row[1];
								$pass=$row[2];
								$email=$row[3];
                                $rol=$row[4];
                                $image=$row[5];
							}

					?>


            <form action="ejecutaactualizar.php" method="post" enctype="multipart/form-data">
                <input type="text" name="id" style="visibility:hidden" required value="<?php echo $id ?>"
                    readonly="readonly"><br>
                Usuario<br> <input type="text" name="user" required value="<?php echo $user?>"><br>
                Password usuario<br> <input type="Password" required name="pass" value="<?php echo $pass?>"><br>
                Correo usuario<br> <input type="text" required name="email" value="<?php echo $email?>"><br>
                Rol<br> <input type="text" name="rol" required value="<?php echo $rol?>"><br>
                <br>
                <p>Foto de Perfil <input type="file" placeholder="Foto de Perfil" name="image" /></p>
                <br>
                <input type="submit" value="Guardar" class="btn">
            </form>
        </div>
        <div class="divFotoPerfil">
            <img class="fotoPerfil" src="data:image/jpeg;base64,<?php 
                        echo base64_encode( $image); 
                    ?>" />
             <p class="parrafoFotoPerfil">Foto de perfil</p>
        </div>
    </div>
</div>
</div>
<?php include('footer.php');?>