<!DOCTYPE html>
<html lang="en">
<head>
        <title>Temas</title>
        <link rel="stylesheet" type="text/css" href="./recursos/aluindex.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAlumno.css">
        <link rel="stylesheet" type="text/css" href="./recursos/aluheader.css">
    </head>
<body onload="validar_sesione()">
    <?php
        $conexion = mysqli_connect('localhost','root','','proyecto') or die ("f");
    ?>
    <div id="contenedor">
        <div id="header">
            <h1>AQUI VA UN TITULO BONITO CON UN LOGO BONITO</h1>
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
                <table style="border:1px solid black;margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
                    <tr>
                        <td>Hora</td>
                        <td>Dia</td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="footer">
            <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
        </div>
        <script type="text/javascript">
            const accordion = document.getElementsByClassName("contentBx");
            for(i = 0;i<accordion.length;i++){
                accordion[i].addEventListener('click',function(){
                    this.classList.toggle('active');
                });
            }
        </script>
    </div>
</body>
</html>
