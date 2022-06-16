<!DOCTYPE html>
<html lang="en">
<head>
        <title>Actividades</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./recursos/aluindex.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAlumno.css">
        <link rel="stylesheet" type="text/css" href="./recursos/aluheader.css">
    <link rel="stylesheet" type="text/css" href="../reloj.css">
    </head>
<script>
        function actual() {
            fecha=new Date(); 
            hora=fecha.getHours();
            minuto=fecha.getMinutes();
            segundo=fecha.getSeconds(); 
            if (hora<10) {
                hora="0"+hora;
                }
            if (minuto<10) { 
                minuto="0"+minuto;
                }
            if (segundo<10) { 
                segundo="0"+segundo;
                }
            mireloj = hora+" : "+minuto+" : "+segundo;	
            return mireloj; 
        }
        function actualizar() { 
            mihora=actual(); 
            mireloj=document.getElementById("reloj");
            mireloj.innerHTML=mihora; 
        }
        setInterval(actualizar,1000);
    </script>
    <body onload="validar_sesione()">
    <?php
        $conexion = mysqli_connect('localhost','root','','proyecto') or die ("f");
    ?>
        <div id="contenedor">
            <div id="header">
                <h1 style="width: 60%;position:absolute;">INTERMATE PLATAFORMA EDUCATIVA</h1>
                <div id="reloj">
                    00 : 00 : 00
                </div>
            </div>
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
		    <?php
                            error_reporting(0);
                            include("conexion.php");
                            $id=$_POST['id'];
                            $id1=mysqli_query($conexion, "SELECT * FROM grupo WHERE Profesor='6'");
                        ?>
                <table style="border:1px solid black;margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Tema</td>
                                <td>Estatus</td>
                                <td>Atendida</td>
                                <td>Observacion</td>
                            </tr>
                        <?php
                        while($row = mysqli_fetch_array($id1))
                            {
                            ?>
                                <tr>
                                    <td><?php echo $row["Id"]; ?></td>
                                    <td><?php echo $row["Nombre"]; ?></td>
                                    <td><?php echo $row["Tema"]; ?></td>
                                    <td><?php echo $row["Estatus"]; ?></td>
                                    <td><?php echo $row["Atendida"]; ?></td>
                                    <td><?php echo $row["Observacion"]; ?></td>
                                </tr>
                        <?php
                            }
                        ?>
                        </table>
            </div>
        </div>            
        <div id="footer">
            <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
