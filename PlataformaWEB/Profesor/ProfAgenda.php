<!DOCTYPE html>
<html>
    <head>
        <title>Agenda</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./recursos/vistaProfesor.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navProfesor.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <link rel="stylesheet" type="text/css" href="recursos/reloj.css">
        <style>    
            input[type=submit]:hover {
                background-color: #45a049;
                cursor: pointer;
            }
        </style>
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
    <body>
        <div id="contenedor">
            <div id="header">
                <h1 style="width: 60%;position:absolute;">INTERMATE PLATAFORMA EDUCATIVA</h1>
                <div id="reloj">
                    00 : 00 : 00
                </div>
            </div>
            <div id="navegacion">
                <nav>
                    <ul class="nav">
                        <li><a>Gestionar</a>
                            <ul>
                                <li><a href = "ProfselGrupo.php">Grupo</a></li>
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
                        <li><a href = "ProfSoporte.php">Soporte</a></li>
                        <li><a href = "ProfAyuda.html">Ayuda</a></li>
                        <li><a style="color: rgb(255, 93, 93);" href = "/PlataformaWEB/index.php">SALIR</a></li>
                    </ul>
                </nav> 
            </div>
            <div id="contenido">
                <div id="section">
                    <div id="articulo">
                        <?php
                            error_reporting(0);
                            include("conexion.php");
                            $id=$_POST['id'];
                            $id1=mysqli_query($conexion, "SELECT * FROM agenda WHERE profesor='6'");
                            $id2=mysqli_query($conexion, "SELECT * FROM alumno WHERE tutor='Prueba'");
                        ?>
                        <table style="border:1px solid black;margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
                            <tr>
                                <td>Alumno</td>
                                <td>Hora</td>
                                <td>Fecha</td>
                            </tr>
                        <?php
                        while($row = mysqli_fetch_array($id1))
                            {
                            ?>
                                <tr>
                                    <td><?php echo $row["alumno"]; ?></td>
                                    <td><?php echo $row["hora"]; ?></td>
                                    <td><?php echo $row["fecha"]; ?></td>
                                </tr>
                        <?php
                            }
                        ?>
                        </table>
                        <form action method="POST">
                            <select name="id" id="id" required>
                                <?php
                                mysqli_data_seek($id2, 0);
                                while($row = mysqli_fetch_array($id2))
                                    {
                                        echo "<option value=".$row['Id'].">".$row['Id']."</option>";
                                    }
                                ?>
                            </select>
                            <input type="date" name="dia" value="dia" min="<?=date('Y-m-d');?>" required>
                            <input type="time" name="hora" value="hora" min="07:00" max="16:00" required>
                            <input type="submit" name="agendar" value="Agendar Tutoria">
                        </form>
                        <?php
                            if ($_POST) {
                                $hora = $_POST['hora'];
                                $fecha = $_POST['dia'];
                                $alumno = $_POST['id'];
                                mysqli_query($conexion, "INSERT INTO agenda(hora,fecha,alumno,profesor) VALUES('$hora','$fecha','$alumno','6')");
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
