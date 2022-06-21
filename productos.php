<?php include('header.php');?>
<section id="contacto">

    <div class="content">
        <?php
//session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
	header("Location:index.php");
}
?>

        <div class="row">

            <div class="span12">

                <div class="caption">

                    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                    <h2> PRODUCTOS</h2>
                    <div class="well well-small">
                        <!-- <hr class="soft"/> -->
                        <h4>Filtros</h4>
                        <form action="productos.php?pagina=1&" method="get" class="formProductos">
                            <div class=filtrosProductos>
                                <input id="pagina" name="pagina" type="hidden" value="1">
                                <input type="text" name="filtro" class="" placeholder="Cod. barra, Nombre y Descripción"
                                    value="<?php if (isset($_GET['filtro'])){echo$_GET['filtro'];}?>" />
                            </div>
                            <div class=filtrosProductos>
                            <p> Ordernar por:<select name="Order" class="comboOrder"> 
                                    <option value="1"
                                        <?php if (isset($_GET['Order'])){if($_GET['Order']==1){echo "selected";}}?>">
                                        Nombre Desc.</option>
                                    <option value="2"
                                        <?php if (isset($_GET['Order'])){if($_GET['Order']==2){echo "selected";}}?>>
                                        Nombre Asc.</option>
                                </select></p>
                            </div>

                            <div class="divBtnProductos">
                                <input type="submit" value="Buscar" class="btn btnProductos">
                            </div>
                        </form>
                        <?php

				require("DBConnect.php");
				//-----------paginacion----------
				if(!$_GET){
					header('Location:productos.php?pagina=1');
				}
                $sql=("SELECT count(*) FROM productos");
                if (isset($_GET['filtro'])){
                  $filtro = $_GET['filtro'];
                  if (empty($filtro)) {
                    $sql=("SELECT count(*) FROM productos");
                    } else{
                        $sql=("SELECT count(*) FROM productos Where nombre like '%$filtro%' OR descripcion like '%$filtro%' OR codbarra like '%$filtro%'");
                    }
                     }else{
                        $sql=("SELECT count(*) FROM productos");
                }
              
                $sentencia=mysqli_query($mysqli,$sql);
			    $arreglo=mysqli_fetch_row($sentencia);

            
				$totalArtDB = $arreglo[0];
            
				$articulos_x_pagina = 5;
				$paginas = $totalArtDB/$articulos_x_pagina; 
				$paginas = ceil($paginas);
	

				$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;
           
				//fin parte paginacion

              
                if (empty($filtro)) {
                    $sql=("SELECT * FROM productos Order by nombre Desc LIMIT {$iniciar},{$articulos_x_pagina} ");
                    if (isset($_GET['Order'])){
                        $orden = $_GET['Order'];
                        If ($orden == 2){
                            $sql=("SELECT * FROM productos Order by nombre Asc LIMIT {$iniciar},{$articulos_x_pagina} ");
                        }
                 }
                 
                  } else{
                    $filtro = $_GET['filtro'];
                    $orden = $_GET['Order'];
                    $sql=("SELECT * FROM productos Where nombre like '%$filtro%' OR descripcion like '%$filtro%' OR codbarra like '%$filtro%' Order by nombre Desc LIMIT {$iniciar},{$articulos_x_pagina}");
                    If ($orden == 2){
                        $sql=("SELECT * FROM productos Where nombre like '%$filtro%' OR descripcion like '%$filtro%' OR codbarra like '%$filtro%' Order by nombre Asc LIMIT {$iniciar},{$articulos_x_pagina}");
                    }
                  }


//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				
            $query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Cod. Barra</td>";
						echo "<td>Nombre</td>";
						echo "<td>Descripción</td>";
					echo "</tr>";

			    

				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='grilla'>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";

					echo "</tr>";
				}

				echo "</table>";
                    	//----------------aca empieza Paginacion------------- 
					?>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item
	<?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>
	"><a class="page-link" tabindex="-1"
                                        href="productos.php?pagina=<?php echo $_GET['pagina']-1 ?>&filtro=<?php if (isset($_GET['filtro'])){echo$_GET['filtro'];}?>&Order=<?php if (isset($_GET['Order'])){echo$_GET['Order'];}?>">
                                        Anterior
                                    </a>
                                </li>

                                <?php for($i=0;$i<$paginas;$i++): ?>
                                <li class="page-item 
		<?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                                    <a class="page-link"
                                        href="productos.php?pagina=<?php echo $i+1 ?>&filtro=<?php if (isset($_GET['filtro'])){echo$_GET['filtro'];}?>&Order=<?php if (isset($_GET['Order'])){echo$_GET['Order'];}?>">
                                        <?php echo $i+1 ?>
                                    </a>
                                </li>
                                <?php endfor ?>


                                <li class="page-item
	<?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>
	"><a class="page-link" href="productos.php?pagina=<?php echo $_GET['pagina']+1 ?> &filtro=<?php if (isset($_GET['filtro'])){echo$_GET['filtro'];}?>&Order=<?php if (isset($_GET['Order'])){echo$_GET['Order'];}?>">
                                        Siguiente</a>
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