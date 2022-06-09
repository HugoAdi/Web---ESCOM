<!DOCTYPE html>
<html>
    <head>
        <title>Profesor</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./recursos/vistaProfesor.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navProfesor.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <style>    
            input[type=submit]:hover {
                background-color: #45a049;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <div id="header">
                <h1>AQUI VA UN TITULO BONITO CON UN LOGO BONITO</h1>
            </div>
            <div id="navegacion">
                <nav>
                    <ul class="nav">
                        <li><a>Gestionar</a>
                            <ul>
                                <li><a href = "ProfGesGrupo.php">Grupo</a></li>
                                <li><a href = "ProfGesAlu.php">Alumno</a></li>
                            </ul> 
                        </li>
                        <li><a>Gestionar Temas</a>
                            <ul>
                                <li><a>Tipo de Material</a>
                                    <ul>
                                        <li><a href = "ProfGesTema-Video.php">Video</a></li>
                                        <li><a href = "ProfGesTema-Imprimir.php">Material para Imprimir</a></li>
                                        <li><a href = "ProfGesTema-Actividad.php">Actividad en Linea</a></li>
                                        <li><a href = "ProfGesTema-Evaluacion.php">Examen o evaluacion</a></li>
                                    </ul> 
                                </li>
                                <li><a>Seleccionar Bloque</a>
                                    <ul>
                                        <li><a href = "ProfGesTema-B1.html">Bloque 1</a></li>
                                        <li><a href = "ProfGesTema-B2.html">Bloque 2</a></li>
                                        <li><a href = "ProfGesTema-B3.php">Bloque 3</a></li>
                                    </ul> 
                                </li>
                            </ul> 
                        </li>
                        <li><a href = "ProfAgenda.php">Agenda</a></li>
                        <li><a href = "ProfActPerfil.php">Actualizacion de perfil</a></li>
                        <li><a href = "ProfContraseña.php">Contraseña</a></li>
                        <li><a href = "ProfSoporte.html">Soporte</a></li>
                        <li><a href = "ProfAyuda.html">Ayuda</a></li>
                        <li><a style="color: rgb(255, 93, 93);" href = "localhost/prueba/index.php">SALIR</a></li>
                    </ul>
                </nav> 
            </div>
            <div id="contenido">
                <div id="section">
                    <div id="articulo">
                        <?php
                            error_reporting(0);
                            session_start();
                            include("conexion.php");
                            $sesion=$_SESSION['arc1'];
                        ?>
                        <form action method="POST">
                            Introduzca su antigua contraseña: <input type="text">
                            Introduzca una nueva contraseña: <input type="text" name="contraseña">
                            Vuelva a introducir la nueva contraseña: <input type="text">
                            <input type="submit" name="modificar" value="Modificar">
                        </form>
                        <?php
                            if($_POST) {
                                $con=$_POST['contraseña'];
                                mysqli_query($conexion, "UPDATE usuario SET Contraseña='$con' WHERE Nombre_usuario='$sesion'");
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | © Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>