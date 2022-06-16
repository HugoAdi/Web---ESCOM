<!DOCTYPE html>
<html>
    <head>
        <title>Gestionar usuario</title>
        <link rel="stylesheet" type="text/css" href="./recursos/AdminGestionarUsuario.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAdministrador.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <link rel="stylesheet" type="text/css" href="reloj.css">
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
                <div id="articulo">
                    <?php
                        include("conexion.php");
                    ?>
                    <?php
                        $id1 = mysqli_query($conexion, "SELECT * FROM soporte");
                    ?>
                    <div style="overflow-x: scroll; overflow-y: scroll; height: 80%;width:100%;margin-bottom: 20px;">
                        <table>
                            <tbody>
                                <tr>
                                    <th>id_duda</th>
                                    <th>Tema</th>
                                    <th>Correo principal</th>
                                    <th>Detalle</th>
                                    <th>Atendida</th>
                                    <th>Observación</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_array($id1)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["tema"]; ?></td>
                                        <td><?php echo $row["correo_principal"]; ?></td>
                                        <td><?php echo $row["detalle"]; ?></td>
                                        <td><?php echo $row["atendida"]; ?></td>
                                        <td><?php echo $row["observacion"]; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        <button style="margin-right: 275px;" class="button"><a href="AdminAñadirSoporte.php" style="color: white;">Insertar</a></button>
                        <button class="button">Consultar por tema</button>
                        <button class="button"><a href="AdminSoporte.php" style="color: white;">Consulta general</button>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>