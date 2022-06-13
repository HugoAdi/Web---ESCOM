<!DOCTYPE html>
<html lang="en">
<head>
        <title>Soporte</title>
        <link rel="stylesheet" type="text/css" href="./recursos/aluindex.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAlumno.css">
        <link rel="stylesheet" type="text/css" href="./recursos/aluheader.css">
    </head>
<body>
    <div id="contenedor">
        <div id="header">
            <h1>AQUI VA UN TITULO BONITO CON UN LOGO BONITO</h1>
        </div>
        <div id="navegacion">
            <nav>
                <ul class="nav">
                    <li><a href = "Alumno.html">Inicio</a></li>
                    <li><a href = "Bloque.html">Bloque</a>
                        <ul>
                            <li><a href = "Bloque1.html">Bloque 1</a></li>
                            <li><a href = "Bloque2.html">Bloque 2</a></li>
                            <li><a href = "Bloque3.html">Bloque 3</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Temas.html">Temas</a></li>
                    <li><a href = "TipoM.html">Tipo de material</a>
                        <ul>
                            <li><a href = "video.html">Video</a></li>
                            <li><a href = "docs.html">Material para imprimir</a></li>
                            <li><a href = "actividades.html">Actividad en linea</a></li>
                            <li><a href = "evaluacion.html">Evaluación</a></li>
                            <li><a href = "librodig.html">Libro digital</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Tutorias.html">Tutorias</a></li>
                    <li><a href = "ActPerfil.html">Actualizacion de perfil</a></li>
                    <li><a href = "Soporte.html">Soporte</a></li>
                    <li><a href = "Ayuda.html">Ayuda</a></li>
                    <li><a style="color: rgb(255, 93, 93);" href = "">SALIR</a></li>
                </ul>
            </nav> 
        </div>
        <div id="contenido">
            <div id="articulo">
                <fieldset>
                    <legend><h3>Soporte</h3></legend>
                    Duda: <input type="text" required placeholder="Palabra secreta">
                    Correo electronico: <input type="email" required placeholder="ej. alguien@gmail.com">
                    Detalle su duda: <textarea name="detalleduda" id="DD" cols="30" rows="10"></textarea>
                </fieldset>
                <!-- <?php
                    if ($_POST) {
                        $conexion = mysqli_connect('localhost','root','','proyecto') or die ("f");
                        $id_alumno = $_COOKIE['id_estudiante'];
                        $nombre_profesor = $_POST['profesor'];
                        $fecha = $_POST['fecha'];
                        $hora = $_POST['hora'];
                        $result = mysqli_query($conexion,"SELECT id_profesor from profesor where nombre = '$nombre_profesor'");
                        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
                        $id_profesor = $row['id_profesor'];
                        if (mysqli_query($conexion,"INSERT INTO asesorias values ('','$id_alumno','$id_profesor','$fecha','$hora')")) {
                            echo '<script language="javascript">alert("Tu solicitud fue enviada con exito");</script>';
                        }else{
                            echo '<script language="javascript">alert("Ocurrio un error, inenta mas tarde");</script>';
                        }
                    }
                ?> -->
            </div>
        </div>
        <script type="text/javascript">
            const accordion = document.getElementsByClassName("contentBx");
            for(i = 0;i<accordion.length;i++){
                accordion[i].addEventListener('click',function(){
                    this.classList.toggle('active');
                });
            }
        </script>
        <div id="footer">
            <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
