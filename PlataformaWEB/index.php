<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./recursos/index.css">
        <link rel="stylesheet" type="text/css" href="./recursos/nav.css">
        <link rel="stylesheet" type="text/css" href="./recursos/header.css">
        <link rel="stylesheet" type="text/css" href="reloj.css">
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
            <?php
			include("conexion.php");
		    ?>
            <div id="contenido">
                <div id="section">
                    <div id="articulo">
                        <h2>PROYECTO<br>TECWEB</h2>
                        <p>El proyecto es una plataforma de educación en linea para nivel primaria en el área de matemáticas,
                             a través de un entorno amigable e intuitivo para que el alumno tenga fácil acceso a los recursos educativos , 
                             con asesoría con profesores, los cuales cuentan con las herramientas para que se puedan llevar seguimiento 
                             de las actividades y evaluaciones del alumno.</p>
                    </div>
                </div>
                <div id="aside">
                    <form id="login" method="POST" action="confirmacion.php">
                        <h2>Inicio de sesion</h2>
                        <label>Usuario</label>
                        <input type = "text" name ="Usuario" placeholder = "Usuario / Email"><br>
                        <label>Contraseña</label>
                        <input type = "password" name = "Contrasena" placeholder = "Contraseña"><br>
                        <label>Tipo de usuario</label>
                        <select name="Tipo-usuario" id="Tipo-usuario">
                            <option value="alumno">Alumno</option>
                            <option value="profesor">Profesor</option>
                            <option value="administrador">Administrador</option>
                        </select> <br>
                        <button type = "submit" name = "Iniciar Sesion">Iniciar sesión</button><br><br><br><br>
                        <a href="registro.php">¿No tienes cuenta? ¡Registrate aqui!</a><br><br>
                        <a href="">¿Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>
