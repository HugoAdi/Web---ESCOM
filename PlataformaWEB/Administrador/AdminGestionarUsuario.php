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
                        $id1 = mysqli_query($conexion, "SELECT * FROM usuario");
                    ?>
                    <div style="overflow-x: scroll; overflow-y: scroll; height: 80%;width:100%;margin-bottom: 20px;">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Nombre Completo</th>
                                    <th>Correo Principal</th>
                                    <th>Correo alterno</th>
                                    <th>CURP</th>
                                    <th>Tipo de usuario</th>
                                    <th>teléfono</th>
                
                                    <th>Usuario</th>
                                    <th>Clave | contraseña</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_array($id1)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["Nombre"]; ?></td>
                                    <td><?php echo $row["Correo_electronico"]; ?></td>
                                    <td><?php echo $row["Correo_electronico_alterno"]; ?></td>
                                    <td><?php echo $row["CURP"]; ?></td>
                                    <td><?php echo $row["tipo_usuario"]; ?></td>
                                    <td><?php echo $row["Telefono"]; ?></td>
                                    <td><?php echo $row["Nombre_usuario"]; ?></td>
                                    <td><?php echo $row["Contraseña"]; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        <button class="button" style="margin-right: 120px">Confirmar usuario</button>
                        <button class="button"><a style="color:white;" href="/Administrador/AdminAgregarUsuario.php">Agregar</a></button>
                        <button class="button"><a style="color:white;" href="/Administrador/AdminEliminarUsuario.php">Eliminar</a></button>
                        <button class="button"><a style="color:white;" href="/Administrador/AdminGestionarUsuario.php">Consultar</a></button>
                        <button class="button"><a style="color:white;" href="/Administrador/AdminModificarUsuario.php">Modificar</a></button>
                        <button class="button">Imprimir pdf</button>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>