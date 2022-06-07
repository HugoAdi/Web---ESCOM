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
                            include("conexion.php");
                            $id=$_POST['id'];
                            $id1=mysqli_query($conexion, "SELECT * FROM material");
                        ?>
                        <table style="border:1px solid black;margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Tema</td>
                                <td>Tipo</td>
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
                            <input type="submit" name="eliminar" value="Eliminar">
                        </form>
                        <?php
                            if ($_POST) {
                                $id = $_POST['id'];
                                mysqli_query($conexion, "DELETE FROM material WHERE Id='$id'");
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