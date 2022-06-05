<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="./recursos/index2.css">
        <link rel="stylesheet" type="text/css" href="./recursos/nav.css">
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
                position: relative;
            }
            form{
                margin-top: 5px;
                width: 70%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        include("conexion.php");
        ?>
        <div id="contenedor">
            <div id="header">
                <h1>AQUI VA UN TITULO BONITO CON UN LOGO BONITO</h1>
            </div>
            <nav>
                <ul>
                    <li><a href = "index.html">Pagina Principal</a></li>
                    <li><a href = "acerca.html">Acerca de</a>
                        <ul>
                            <li><a href = "acerca2.html">Alumno</a></li>
                            <li><a href = "acerca3.html">Docente</a></li>
                            <li><a href = "acerca4.html">Administrador</a></li>
                        </ul>
                    </li>
                    <li><a href = "PF.html">Preguntas frecuentes</a></li>
                    <li><a href = "contacto.html">Contacto</a></li>
                    <li><a href = "ayuda.html">Ayuda</a>
                        <ul>
                        <li><a href = "ayuda2.html">Alumno</a></li>
                        <li><a href = "ayuda3.html">Docente</a></li>
                        <li><a href = "ayuda4.html">Administrador</a></li>
                        </ul> 
                    </li>
                </ul>
            </nav>
            <div id="contenido">
                <div id="articulo">
                    <form action method="POST">
                        <div class="container">
                        <h1 style="text-align: center;">Registro</h1>
                    
                        <label for="nombre_completo"><b>nombre completo</b></label>
                        <input type="text" placeholder="Ingresa tu nombre completo" name="nombre_completo" id="nombre_completo" required>

                        <label for="correo_principal"><b>correo principal</b></label>
                        <input type="text" placeholder="Ingresa correo" name="correo_principal" id="correo_principal" required>

                        <label for="correo_alterno"><b>correo alterno</b></label>
                        <input type="text" placeholder="Ingresa correo" name="correo_alterno" id="correo_alterno" required>

                        <label for="CURP"><b>CURP</b></label>
                        <input type="text" placeholder="Ingresa CURP" name="CURP" id="CURP" required>

                        <label for="usuario"><b>Nombre Usuario</b></label>
                        <input type="text" placeholder="Ingresa tu nombre de usuario" name="usuario" id="usuario" required>
                    
                        <label for="contra"><b>Contraseña</b></label>
                        <br>
                        <input  type="password" placeholder="Enter Password" name="contra" id="contra" required>

                        <br><br>
                        <label for="telefono"><b>Telefono</b></label>
                        <input type="text" placeholder="Telefono" name="telefono" id="telefono" required>

                            <br>
                        <label for="tipo_usuario"><b>Tipo de Usuario</b></label>
                            <select id="tipo_usuario" name="tipo_usuario">
                            <option value="administrador">Aministrador</option>
                            <option value="profesor">Maestro</option>
                            <option value="alumno">Alumno</option>
                            </select>
                        
                        <button type="submit" style="float: left; margin-left:50px">Registrar</button>
                        </div>
                    
                        <div class="container signin">
                        <p>Ya tienes una cuenta registrada? <a href="Inicio.php">Login</a>.</p>
                        </div>
                </div>
                <?php
                if ($_POST) {
                    //$id = $_POST['id'];
                    $nombre_completo = $_POST['nombre_completo'];
                    $correo_principal = $_POST['correo_principal'];
                    $correo_alterno = $_POST['correo_alterno'];
                    $CURP = $_POST['CURP'];
                    $usuario = $_POST['usuario'];
                    $contra = $_POST['contra'];
                    $telefono = $_POST['telefono'];
                    $tipo_usuario = $_POST['tipo_usuario'];
                    mysqli_query($conexion, "INSERT INTO usuario(nombre,Nombre_usuario,tipo_usuario,Contraseña,Telefono,CURP,Correo_electronico,Correo_electronico_alterno) VALUES('$nombre_completo','$usuario','$tipo_usuario','$contra', '$telefono', '$CURP','$correo_principal','$correo_alterno')");
                    echo "<h2> Perfil Registrado </h2>";
                    $_SESSION['nomusu']=$nombre_completo;
                    if($tipo_usuario=="administrador"){
                        $id=mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre='$nombre_completo'");
                        $row = mysqli_fetch_array($id);
                        $id1=$row["id"];
                        mysqli_query($conexion, "INSERT INTO administrador(id) VALUES('$id1')");
                    }
                    if($tipo_usuario=="profesor"){
                        echo "<meta http-equiv='refresh' content='0; url=registroProfesor.php'>";
                    }
                    if($tipo_usuario=="alumno"){
                        echo "<meta http-equiv='refresh' content='0; url=registroAlumno.php'>";
                    }
                }
                ?>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>