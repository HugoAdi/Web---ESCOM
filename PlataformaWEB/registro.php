<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./recursos/index2.css">
        <link rel="stylesheet" type="text/css" href="./recursos/nav.css">
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
                position: relative;
            }
            form{
                margin-top: 5px;
                width: 70%;
                height: 100%;
            }
        </style>
    </head>
    <script>
        function curpValida(curp) {
            var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
            validado = curp.match(re);
            
            if (!validado) 
                return false;
            function digitoVerificador(curp17) {
                var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                    lngSuma      = 0.0,
                    lngDigito    = 0.0;
                for(var i=0; i<17; i++)
                    lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
                lngDigito = 10 - lngSuma % 10;
                if (lngDigito == 10) return 0;
                return lngDigito;
            }
        
            if (validado[2] != digitoVerificador(validado[1])) 
                return false;
                
            return true; 
        }


        function validarInput(input) {
            var curp = input.value.toUpperCase(),
                resultado = document.getElementById("resultado"),
                valido = "No válido";
                
            if (curpValida(curp)) { 
                valido = "Válido";
            } 
            resultado.innerText = " CURP: " + valido +"\n";
        }
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
        session_start();
        include("conexion.php");
        ?>
        <div id="contenedor">
        <div id="header">
            <h1 style="width: 60%;position:absolute;">INTERMATE PLATAFORMA EDUCATIVA</h1>
            <div id="reloj">
                00 : 00 : 00
            </div>
        </div>
            <nav>
                <ul>
                    <li><a href = "index.php">Pagina Principal</a></li>
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
                    
                        <label for="nombre_completo"><b>Nombre completo</b></label>
                        <input type="text" placeholder="Ingresa tu nombre completo" name="nombre_completo" id="nombre_completo" required>

                        <label for="correo_principal"><b>Correo principal</b></label>
                        <input type="email" placeholder="Ingresa tu correo electronico principal" name="correo_principal" id="correo_principal" required>

                        <label for="correo_alterno"><b>Correo alterno</b></label>
                        <input type="email" placeholder="Ingresa tu correo electronico alterno" name="correo_alterno" id="correo_alterno" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

                        <label for="CURP"><b>CURP</b></label>
                        <input type="text" placeholder="Ingresa tu CURP" oninput="validarInput(this)" name="CURP" id="CURP" required>
                        <pre id="resultado" style="color:red;"></pre>
                        
                        <label for="usuario"><b>Nombre del usuario</b></label>
                        <input type="text" placeholder="Ingresa tu nombre de usuario" name="usuario" id="usuario" required>
                    
                        <label for="contra"><b>Contraseña</b></label>
                        <br>
                        <input  type="password" placeholder="Ingresa una contraseña" name="contra" id="contra" required>

                        <br>
                        <label for="telefono"><b>Telefono</b></label>
                        <input type="text" placeholder="Ingresa tu telefono" name="telefono" id="telefono" required>

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