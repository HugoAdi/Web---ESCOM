<!DOCTYPE html>
<html>
    <head>
        <title>Gestionar usuario</title>
        <link rel="stylesheet" type="text/css" href="./recursos/AdminGestionarUsuario.css">
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
    <body>
        <?php
            include("conexion.php");
        ?>
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
                            <div class="item2">
                                <label for="ldudaacercade">Tema</label>
                                <input type="text" id="ldudaacercade" name="dacercade" placeholder="">
                            </div>
                            <div class="item3">
                                <label for="lemail">Correo principal</label>
                                <input type="email" id="lemail" name="correoprincipal" placeholder="">
                            </div>
                            <div class="item4">
                                <label for="ldetallar">Detallar duda</label>
                                <input type="text" id="ldetallar" name="detallard" placeholder="">
                            </div>
                            <div class="item5">
                                <label for="latendida">Atendida</label>
                                <input type="text" id="latendida" name="atendida" placeholder="">
                            </div>
                            <div class="item6">
                                <label for="lobservacion">Observacion</label>
                                <input type="text" id="lobservacion" name="observacion" placeholder="">
                            </div>
                            <div class="item10" style="margin-top: 20px;">
                                <input type="submit" value="Agregar">
                            </div>
                        </div>
                    </form>
                    <?php
                        if ($_POST) {
                            //$id = $_POST['id'];
                            $dacercade = $_POST['dacercade'];
                            $correoprincipal = $_POST['correoprincipal'];
                            $detallard = $_POST['detallard'];
                            $atendida = $_POST['atendida'];
                            $observacion = $_POST['observacion'];
                            mysqli_query($conexion, "INSERT INTO soporte(tema,correo_principal,detalle,atendida,observacion) VALUES('$dacercade','$correoprincipal','$detallard','$atendida', '$observacion')");
                            echo "<h2> Soporte insertado </h2>";
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