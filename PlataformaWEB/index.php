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
    </head>
    <body>
        <div id="contenedor">
            <div id="header">
                <h1>INTERMATE PLATAFORMA EDUCATIVA</h1>
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
                <div id="section">
                    <div id="articulo">
                        <h2>PROYECTO<br>TECWEB</h2>
                        <p>Esta página web fue elaborado para cumplir con el anhelo compartido de
                            que en el país se ofrezca una educación con equidad y calidad, en la que
                            todos los alumnos aprendan, sin importar su origen, su condición personal,
                            económica o social, y en la que se promueva una formación centrada en
                            la dignidad humana, la solidaridad, el amor a la patria, el respeto y cuidado
                            de la salud, así como la preservación del medio ambiente. </p>
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