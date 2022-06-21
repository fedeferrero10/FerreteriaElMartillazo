<?php include('header.php');?>
<section id="contacto">

    <div class="content">
        <?php
//session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index.php");
}
?>

        <div class="row">

            <div class="span12">

                <div class="caption">

                    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                    <h2> Sistema de Administración</h2>
                    <div class="well well-small">
                        <!-- <hr class="soft"/> -->
                        <h4>Usuarios</h4>
                        <div class="divAgregarUsuarios">
						<a href='agregarUsuarios.php'> <input type="submit" value="Agregar" class="btn btnAgregarUsuarios"></a>
                        </div>
                        <div class="row-fluid">

                            <?php

				require("DBConnect.php");
				//-----------paginacion----------
				if(!$_GET){
					header('Location:admin.php?pagina=1');
				}

				$sql=("SELECT count(*) FROM users");
				$sentencia=mysqli_query($mysqli,$sql);
				$arreglo=mysqli_fetch_row($sentencia);
				$totalArtDB = $arreglo[0];
				$articulos_x_pagina = 5;
				$paginas = $totalArtDB/$articulos_x_pagina; 
				$paginas = ceil($paginas);
			

				$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;
				//fin parte paginacion
				$sql=("SELECT * FROM users LIMIT {$iniciar},{$articulos_x_pagina}");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
					echo "<td></td>";
					echo "<td></td>";
						echo "<td>Id</td>";
						echo "<td>Nombre de usuario</td>";
						echo "<td>Contraseña</td>";
						echo "<td>Correo electrónico</td>";
						echo "<td>Rol</td>";
						echo "<td>Foto de Perfil</td>";
						//echo "<td>Contraseña del administrador</td>"; //contraseña del adinistrador que no sea visible
					
					echo "</tr>";

			    
			?>
 
                            <?php 

				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='grilla'>";
					  echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='imagenes/editar.png' class='accionesGrilla'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/eliminar.png' class='accionesGrilla'/></a></td>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>*******</td>";
				    	echo "<td>$arreglo[3]</td>";
						echo "<td>$arreglo[4]</td>";
						echo "<td><img class='fotoPerfilGrilla' src='data:image/jpeg;base64,".base64_encode($arreglo[5])."'/></td>";
                   
				    	//echo "<td>$arreglo[4]</td>"; //Contraseña del administrador que no sea visible


						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM users WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

					?>





                            <?php 
	//----------------aca empieza Paginacion------------- 




		

			?>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item
	<?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>
	"><a class="page-link" tabindex="-1" href="admin.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                                            Anterior
                                        </a>
                                    </li>

                                    <?php for($i=0;$i<$paginas;$i++): ?>
                                    <li class="page-item 
		<?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                                        <a class="page-link" href="admin.php?pagina=<?php echo $i+1 ?>">
                                            <?php echo $i+1 ?>
                                        </a>
                                    </li>
                                    <?php endfor ?>


                                    <li class="page-item
	<?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>
	"><a class="page-link" href="admin.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                                            Next</a>
                                    </li>
                                </ul>
                            </nav>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>