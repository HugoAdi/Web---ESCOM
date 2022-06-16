<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Usuario</title>
        <link rel="stylesheet" type="text/css" href="./recursos/vistaAdministrador.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAdministrador.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <link rel="stylesheet" type="text/css" href="reloj.css">
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
    <?php
        include("conexion.php");
    ?>
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
                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarUsuario.php">Gestionar usuario</a>
                        </li>
                        <li><a href = '#'>Gestionar temas</a>
                            <ul>
                                <li><a href = "">Bloque 3</a>
                                <ul>
                                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarActividad.php">Actividad</a></li>
                                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarVideo.php">Video</a></li>
                                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarEvaluacion.php">Evaluacion</a></li>
                                        <li><a href = "/PlataformaWeb/Administrador/AdminGestionarImpresion.php">Material impreso</a></li>
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
                        <li><a href = "/PlataformaWeb/Administrador/AdminSoporte.php">Soporte</a></li>
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
                                <label for="fname">Nombre completo</label>
                                <input type="text" id="fname" name="nombre" placeholder="">
                            </div>
                            <div class="item2">
                                <label for="ltelefono">Telefono</label>
                                <input type="number" id="ltelefono" name="telefono" placeholder="">
                            </div>
                            <div class="item3">
                                <label for="lcorreop">Correo principal</label>
                                <input type="email" id="lcorreop" name="correoprincipal" placeholder="">
                            </div>
                            <div class="item5">
                                <label for="lcorreoa">Correo alterno</label>
                                <input type="email" id="lcorreoa" name="correoalterni" placeholder="">
                            </div>
                            <div class="item6">
                                <label for="lusuario">CURP</label>
                                <input type="text" id="lusuario" name="CURP" placeholder="">
                            </div>
                            <div class="item6">
                                <label for="lusuario">Usuario</label>
                                <input type="text" id="lusuario" name="usuario" placeholder="">
                            </div>
                            <div class="item7">
                                <label for="ltipousuario">Tipo Usuario</label>
                                <input type="text" id="ltipousuario" name="tipousuario" placeholder="">
                            </div>
                            <div class="item8">
                                <label for="lclave">Clave | contraseña</label>
                                <input type="password" id="lclave" name="clavecontrasenia" placeholder="">
                            </div>
                            <div class="item9">
                                <input type="button" value="Limpiar">
                            </div>
                            <div class="item10">
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                    <?php
                        if ($_POST) {
                            //$id = $_POST['id'];
                            $nombre = $_POST['nombre'];
                            $usuario = $_POST['usuario'];
                            $tipousuario = $_POST['tipousuario'];
                            $clavecontrasenia = $_POST['clavecontrasenia'];
                            $CURP = $_POST['CURP'];
                            $telefono = $_POST['telefono'];
                            $correoprincipal = $_POST['correoprincipal'];
                            $correoalterni = $_POST['correoalterni'];
                            mysqli_query($conexion, "INSERT INTO usuario(Nombre,Nombre_Usuario,
                                                        tipo_usuario,Contraseña,Telefono,CURP,Correo_electronico,
                                                        Correo_electronico_alterno)
                                                        VALUES('$nombre','$usuario','$tipousuario','$clavecontrasenia','$telefono','$CURP','$correoprincipal','$correoalterni')");
                            echo "<h2> Usuario agregado </h2>";
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