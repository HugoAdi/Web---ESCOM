<!DOCTYPE html>
<html lang="en">
<head>
        <title>Actualizacion de perfil</title>
        <link rel="stylesheet" type="text/css" href="./recursos/aluindex2.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAlumno.css">
        <link rel="stylesheet" type="text/css" href="./recursos/aluheader.css">
    </head>
<body onload="validar_sesione()">
    <div id="contenedor">
        <div id="header">
            <h1>INTERMATE PLATAFORMA EDUCATIVA</h1>
        </div>
        <div id="navegacion">
            <nav>
                <ul class="nav">
                    <li><a href = "Alumno.php">Inicio</a></li>
                    <li><a href = "Bloque.html">Bloque</a>
                        <ul>
                            <li><a href = "Bloque1.html">Bloque 1</a></li>
                            <li><a href = "Bloque2.html">Bloque 2</a></li>
                            <li><a href = "Bloque3.php">Bloque 3</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Temas.php">Temas</a></li>
                    <li><a href = "TipoM.html">Tipo de material</a>
                        <ul>
                            <li><a href = "video.php">Video</a></li>
                            <li><a href = "docs.php">Material para imprimir</a></li>
                            <li><a href = "actividades.php">Actividad en linea</a></li>
                            <li><a href = "evaluacion.php">Evaluación</a></li>
                            <li><a href = "librodig.php">Libro digital</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Tutorias.php">Tutorias</a></li>
                    <li><a href = "ActPerfil.php">Actualizacion de perfil</a></li>
                    <li><a href = "Soporte.php">Soporte</a></li>
                    <li><a href = "Ayuda.php">Ayuda</a></li>
                    <li><a style="color: rgb(255, 93, 93);" href = "salir.php">SALIR</a></li>
                </ul>
            </nav> 
        </div>
        <div id="contenido">
            <div id="articulo">
                            <!-- <?php
                            $conexion = mysqli_connect('localhost','root','','proyecto') or die ("f");
                                $id = $_COOKIE['id_estudiante'];
                                $result = mysqli_query($conexion,"select * from alumno where id_alumno='$id'");
                                $row = mysqli_fetch_array($result,MYSQLI_BOTH)
                                    ?>-->
                                        <!-- <form id="actualizar" method="POST" class="actualizar"> -->
                    <fieldset>
                        <legend><h3>Actualizacion de perfil</h3></legend>
                        <label for="boleta" class="label">Numero de boleta</label><br>
                        <input id="boleta" name="boleta" value=""></input><br>
                        <label for="nombre">Nombre</label><br>
                        <input id="nombre" name="nombre" value=""></input><br>
                        <label for="apellidop">Apellido paterno</label><br>
                        <input id="apellidop" name="apellidop" value=""></input><br>
                        <label for="apellidom">Apellido materno</label><br>
                        <input id="apellidom" name="apellidom" value=""></input><br>
                        <label for="correoa">Correo principal</label><br>
                        <input id="correoa" name="correoa" value=""></input><br>
                        <label for="correob">Correo secundario</label><br>
                        <input id="correob" name="correob" value=""></input><br>
                        <label for="contraseña">Contraseña</label><br>
                        <input id="contraseña" name="contraseña" value=""></input><br>
                        <input type="submit" id="actualizar" name="actualizar" value="Actualizar">
                    </fieldset>
                                        <!-- </form> -->
                                        <!-- <?php 
                                    if ($_POST) {
                                            $num = "/^[0-9]+$/";
                                        $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
                                        $re="/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
                                        if (empty($_POST['nombre']) || !preg_match($patron_texto, $_POST['nombre']) || strlen($_POST['nombre']) > 30) {
                                            echo '<script language="javascript">alert("El nombre no debe ser un campo vacio, debe tener unicamente letras y espacios, y debe ser menor a 30 caracteres");</script>';
                                        } else if (empty($_POST['apellidop']) || !preg_match($patron_texto, $_POST['apellidop']) || strlen($_POST['apellidop']) > 30) {
                                            echo '<script language="javascript">alert("El apellido paterno no debe ser un campo vacio, debe tener unicamente letras y espacios, y debe ser menor a 15 caracteres");</script>';
                                        } else if (empty($_POST['apellidom']) || !preg_match($patron_texto, $_POST['apellidom']) || strlen($_POST['apellidom']) > 30) {
                                            echo '<script language="javascript">alert("El apellido materno no debe ser un campo vacio, debe tener unicamente letras y espacios, y debe ser menor a 15 caracteres");</script>';
                                        } else if (empty($_POST['correoa']) || !preg_match($re, $_POST['correoa']) || strlen($_POST['correoa']) > 40) {
                                            echo '<script language="javascript">alert("El correo no debe ser un campo vacio, debe tener unicamente letras y espacios, y debe ser menor a 40 caracteres, ademas debe cumplir con el formato ejemplo@ejemplo.com");</script>';
                                        }else if (empty($_POST['boleta']) || !preg_match($num,$_POST['boleta']) || strlen($_POST['boleta']) != 10) {
                                            echo '<script language="javascript">alert("El numero de boleta no puede esar vacio, deben ser solo numeros naturales y con una longitud de 10 numeros");</script>';
                                        } else if (!preg_match($re,$_POST['correob']) || strlen($_POST['correob']) > 40) {
                                            echo '<script language="javascript">alert("El correo secundario ya no puede ser un campo vacio, debe tener unicamente letras y espacios, y debe ser menor a 40 caracteres, ademas debe cumplir con el formato ejemplo@ejemplo.com");</script>';
                                        } else if (empty($_POST['contraseña']) || strlen($_POST['contraseña']) > 16) {
                                            echo '<script language="javascript">alert("La conraseña no puede ser vacia, y no debe ser mayor a 16 caracteres");</script>';
                                        }
                                        else {
                                            $boleta = $_POST['boleta'];
                                            $nombre = $_POST['nombre'];
                                            $apellidop = $_POST['apellidop'];
                                            $apellidom = $_POST['apellidom'];
                                            $correoa = $_POST['correoa'];
                                            $correob = $_POST['correob'];
                                            $contraseña = $_POST['contraseña'];
                                            mysqli_query($conexion,"UPDATE alumno SET boleta = '$boleta',nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', correoa = '$correoa', correob = '$correob', contraseña = '$contraseña' WHERE id_alumno ='$id'");
                                            setcookie("id_alumno","",time()-100);
                                            mysqli_close($conexion);
                                            ?><script type="text/javascript">window.location.replace("actualizar_e.php");</script><?php
                                        }
                                    }
                            ?>-->
                    <script type="text/javascript">
                        const accordion = document.getElementsByClassName("contentBx");
                        for(i = 0;i<accordion.length;i++){
                            accordion[i].addEventListener('click',function(){
                                this.classList.toggle('active');
                            });
                        }
                    </script>
            </div>
        </div>            
        <div id="footer">
            <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
