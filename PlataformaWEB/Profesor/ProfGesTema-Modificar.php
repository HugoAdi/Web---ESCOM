<!DOCTYPE html>
<html>
    <head>
        <title>Modificar</title>
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
                        <li><a href = "ProfContrase??a.php">Contrase??a</a></li>
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
                            $id1=mysqli_query($conexion, "SELECT * FROM material");
                        ?>
                        <form action method="POST">
                            Id:<select name="id" id="id" required>
                                <?php
                                mysqli_data_seek($id1, 0);
                                while($row = mysqli_fetch_array($id1))
                                    {
                                        echo "<option value=".$row['Id'].">".$row['Id']."</option>";
                                    }
                                ?>
                            </select>
                            Nombre:<input type="text" name="nombre" required>
                            Tema:
                            <select name="tema" id="tema" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                            </select>
                            Tipo:
                            <select name="tipo" id="tipo" required>
                                        <option value="Video">Video</option>
                                        <option value="Imprimir">Imprimir</option>
                                        <option value="Actividad">Actividad</option>
                                        <option value="Evaluacion">Evaluaion</option>
                            </select>
                            Estatus:
                            <select name="estatus" id="estatus" required>
                                        <option value="Publicado">Publicado</option>
                                        <option value="Pendiente">Pendiente</option>
                            </select>
                            Atendida:<input type="text" name="atendida">
                            Observacion:<input type="text" name="observacion">
                            Archivo:<input type="file" id="archivo" name="archivo" required onchange="return Validacion()">
                            <input type="submit" name="modificar" value="Modificar">
                        </form> 
                        <?php
                            if ($_POST) {
                                $nombre = $_POST['nombre'];
                                $tema = $_POST['tema'];
                                $tipo = $_POST['tipo'];
                                $estatus = $_POST['estatus'];
                                $atendida = $_POST['atendida'];
                                $observacion = $_POST['observacion'];
                                $archivo = $_POST['archivo'];
                                mysqli_query($conexion, "UPDATE material SET Nombre='$nombre', Tema='$tema', Tipo='$tipo', Estatus='$estatus', Atendida='$atendida', Observacion='$observacion', Archivo='$archivo' WHERE Id='$id'");
                            }
                        ?> 
                    </div>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | ?? Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>
