<?php include('header.php');?>

<div class="row">
    <div class="span12">

        <div class="caption">

            <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
            <h2> Sistema de Administración</h2>
            <div class="well well-small">
                <!-- <hr class="soft"/> -->
                <h4>Tabla de Alumnos</h4>
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
							}
					?>

                    <form action="ejecutaactualizar.php" method="post">
                        Id<br><input type="text" name="id" value="<?php echo $id ?>" readonly="readonly"><br>
                        Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
                        Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
                        Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
                        <input type="submit" value="Guardar" class="btn btn-success btn-primary">
                    </form>




                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>