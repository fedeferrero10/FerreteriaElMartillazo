<?php include('header.php');
if ($_SESSION['rol']==2){ 
	header("Location:index.php");
}

?>


<section id="login">
    <div class="content">

        <div class="Ingreso">
            <h1 align=center>Inicio de sesión</h1>
            <table border="0" align="center">
                <tr>
                    <td rowspan=2>
                        <form action="validar.php" method="post">
                            <!-- formulario de inicio de sesion-->
                            <table>
                                <tr>
                                    <td > <input type="email" name="mail" placeholder = "Tu email"></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="pass" placeholder = "Contraseña"></td>
                                </tr>
                                <tr>
                                    <td align="center"><input class="btn" type="submit" value="Ingresar">
                                    </td>
                                </tr>
                            </table>
                </tr>
            </table>
            </form>
            <br>
        </div>
        <!-- formulario registro -->
        <div class="Registro">
            <h1 align=center>Registrese aquí</h1>
            <table border="0" align="center" valign="middle">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="nick" class="form-control" required placeholder="Ingresa mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Ingresa contraseña" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
                    </div>



                    <td width=50 align=center>
                        <input class="btn btn-danger" type="submit" name="submit" value="Registrarme" />
                    </td>


                </form>
            </table>
        </div>

    </div>
    </div>
</section>

<?php include('footer.php');?>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->