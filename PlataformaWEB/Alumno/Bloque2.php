<!DOCTYPE html>
<html lang="en">
<head>
        <title>Bloque 2</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div id="section">
                <div id="articulo">
                    <center><table border="5" cellpadding="0" width="900px" bgcolor="#C9C3FF" bordercolor="#380B61" cellspacing ="10">
                        <!-- <font ><caption><h2> Planetas </h2></caption></font> -->
                        <tr align="center">
                            <td colspan="9" bgcolor="#00F3FF"><h3>Archivos Bloque 2</h3></td>
                        </tr>
                        <tr>
                            <td bgcolor="#3AFF3E" align="center">id_mat</td>
                            <td bgcolor="#3AFF3E" align="center">Bloque</td>
                            <td bgcolor="#3AFF3E" align="center">Tema</td>
                            <td bgcolor="#3AFF3E" align="center">Subtema</td>
                            <td bgcolor="#3AFF3E" align="center">Tipo de material</td>
                            <td bgcolor="#3AFF3E" align="center">Nombre</td>
                            <td bgcolor="#3AFF3E" align="center">Actividad</td>
                            <td bgcolor="#3AFF3E" align="center">Evaluacion</td>
                            <td bgcolor="#3AFF3E" align="center">Observaciones</td>
                        </tr>
                        <tr>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                            <td bgcolor="#3AFF3E" align="center">&nbsp;</td>
                        </tr>
                    </table>
                    <!-- <div class="box">
                        <div class="informacion">
                            <table border="1" class="tabla">
                        <tr>
                            <td align="center">Archivos bloque 1</td>
                        </tr>
                        
                    <?php
                        $direccion = '../../Archivos/B1/';
                        if ( $dir = opendir($direccion)) {
                            while ($archivo = readdir($dir)) {
                                   if ($archivo != '.' && $archivo != '..') {
                                       ?> <tr><td align="center"><a href="<?php echo $direccion.$archivo ?>"><?php echo $archivo; ?></a></td> </tr> <?php
                                   }
                               }   
                        }
                    ?>
                    </table>
                        </div>
                    </div> -->
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
        </div>
        <div id="footer">
            <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
