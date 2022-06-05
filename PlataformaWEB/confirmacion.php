<?php
	error_reporting(0);
	include("conexion.php");
	$usur=$_REQUEST['Usuario'];
	$cont=$_REQUEST['Contrasena'];
	$tpu=$_REQUEST['Tipo-usuario'];
	$id=mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre_usuario='$usur' AND Contraseña='$cont' AND tipo_usuario='$tpu'");
	$row = mysqli_fetch_array($id);
	if($row == 0){
                echo "<script>alert('Datos incorrectos!!');</script>";
				echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            }else{
				session_start();
				$_SESSION['arc1']=$usur;
				if($tpu=="profesor"){
					echo "<meta http-equiv='refresh' content='0; url=Profesor/vistaProfesor.html'>";
				}
				else if($tpu=="administrador"){
					echo "<meta http-equiv='refresh' content='0; url=Administrador/vistaAdministrador.html'>";
				}
				else if($tpu=="alumno"){
					echo "<meta http-equiv='refresh' content='0; url=Alumno/Alumno.html'>";
				}
			}
?>