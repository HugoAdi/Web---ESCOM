<!DOCTYPE html>
<html>
    <head>
        <title>Contraseña</title>
        <link rel="stylesheet" type="text/css" href="./recursos/vistaAdministrador.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAdministrador.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <style>
            input,
            select,
            textarea {
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
                grid-row: 1 / 2;
            }
    
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
    
            input[type=submit]:hover {
                background-color: #45a049;
            }
    
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                display: grid;
                grid-template-columns: auto auto;
                grid-gap: 10px;
                padding: 10px;
            }
            form{
                margin-top: 80px;
                width: 70%;
                height: 80%;
            }
        </style>
    </head>
    <?php
        include("conexion.php");
    ?>
    <body>
        <div id="contenedor">
        <div id="header">
                <h1>INTERMATE PLATAFORMA EDUCATIVA</h1>
            </div>
            <div id="navegacion">
                <nav>
                    <ul class="nav">
                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarUsuario.php">Gestionar usuario</a>
                        </li>
                        <li><a href = '#'>Gestionar temas</a>
                            <ul>
                                <li><a href = "">Bloque 3</a>
                                    <ul>
                                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarTemas.html">Actividad</a></li>
                                        <li><a href = "">Video</a></li>
                                        <li><a href = "">Evaluacion</a></li>
                                    </ul> 
                                </li>
                            </ul> 
                        </li>
                        <li><a href = '#'>Actualizacion de perfil</a>
                            <ul>
                                <li><a href = "">Foto</a></li>
                                <li><a href = "/PlataformaWeb/Administrador/AdminActualizacionPerfil.php">Datos personales</a></li>
                            </ul> 
                        </li>
                        <li><a href = "/PlataformaWeb/Administrador/AdminContraseña.php">Contraseña</a></li>
                        <li><a href = "">Soporte</a></li>
                        <li><a href = "/PlataformaWeb/Administrador/acerca4.html">Ayuda</a></li>
                        <li><a style="color: rgb(255, 93, 93);" href = "/PlataformaWeb/index.php">SALIR</a></li>
                    </ul>
                </nav> 
            </div>
            <div id="contenido">
                <div id="section">
                    <form action method="POST">
                        <div class="container">
                        <div class="item1">
                                <label for="fcontraseniaanterior">Usuario</label>
                                <input type="text" id="fname" name="usuario" placeholder="">
                            </div>
                            <div class="item1">
                                <label for="fcontraseniaanterior">Contraseña anterior</label>
                                <input type="text" id="fname" name="fcontraseniaanterior" placeholder="">
                            </div>
                            <div class="item2">
                                <label for="lnuevacontrasenia">Nueva contraseña</label>
                                <input type="text" id="lnuevacontrasenia" name="lnuevacontrasenia" placeholder="">
                            </div>
                            <div class="item3">
                                <label for="lconfirmar">Confirmar contraseña</label>
                                <input type="text" id="lconfirmar" name="lconfirmar" placeholder="">
                            </div>
        
                            <input type="reset" value="Limpiar">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                    <?php
                        if ($_POST) {
                            //$id = $_POST['id'];
                            $usuario= $_POST['usuario'];
                            $contraseniaanterior = $_POST['fcontraseniaanterior'];
                            $nuevacontrasenia = $_POST['lnuevacontrasenia'];
                            mysqli_query($conexion, "UPDATE usuario SET Contraseña = '$nuevacontrasenia' WHERE Contraseña= '$contraseniaanterior' AND  Nombre_usuario='$usuario'");
                            echo "<h2> Se ha cambiado la contraseña </h2>";
                        }
                    ?>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>