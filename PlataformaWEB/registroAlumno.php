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
            <?php
                include("conexion.php");
                $sesion=$_SESSION['nomusu'];
                $id=mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre='$sesion'");
                $row = mysqli_fetch_array($id);
                $id1=$row["Id"];
		    ?>
            <div id="contenido">
                <div id="articulo" >
                <form action method="POST">
                    <div class="container">
                    <h1 style="text-align: center;">Registro</h1>
                    <br><br><br><br>
                    <label for="NumEmp"><b>Ingrese el nombre de su profeosr:</b></label>
                    <input type="text" placeholder="Nombre" name="nombreProfesor" id="nombreProfesor" required>

                    <label for="NumEmp"><b>Ingrese su numero de boleta:</b></label>
                    <input type="text" placeholder="Numero" name="numBoleta" id="numBoleta" required>

                    <label for="NumEmp"><b>Ingrese su Id de Grupo:</b></label>
                    <input type="text" placeholder="Numero" name="IdGrupo" id="IdGrupo" required>

                    <button type="submit">Registrar</button>
                    </div>
                
                    <div class="container signin">
                    <p>Ya tienes una cuenta registrada? <a href="Inicio.php">Login</a>.</p>
                    </div>
                </form>
                </div>
                <?php
                if ($_POST) {
                    $nombreProfesor = $_POST['nombreProfesor'];
                    $numBoleta = $_POST['numBoleta'];
                    $IdGrupo = $_POST['IdGrupo'];
                    mysqli_query($conexion, "INSERT INTO alumno(Id,Tutor,Boleta,Id_grupo) VALUES('$id1','$nombreProfesor','$numBoleta','$IdGrupo')");
                    echo "<h2> Perfil Registrado </h2>";
                    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                }
                ?>
            </div>
            <div id="footer">
                <p>Copyright@2022 Equipo 5 2CV11 | R Todos los derechos reservados</p>
            </div>
        </div>
    </body>
</html>