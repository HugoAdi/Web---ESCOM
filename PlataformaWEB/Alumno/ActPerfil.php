<!DOCTYPE html>
<html lang="en">
<head>
        <title>Actualizacion de perfil</title>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./recursos/aluindex.css">
        <link rel="stylesheet" type="text/css" href="./recursos/navAlumno.css">
        <link rel="stylesheet" type="text/css" href="./recursos/aluheader.css">
	    <link rel="stylesheet" type="text/css" href="../reloj.css">
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
        </div>
        <div id="navegacion">
            <nav>
            <ul class="nav">
                    <li><a href = "Alumno.html">Inicio</a></li>
                    <li><a href = "Bloque.php">Bloque</a>
                        <ul>
                            <li><a href = "Bloque1.html">Bloque 1</a></li>
                            <li><a href = "Bloque2.html">Bloque 2</a></li>
                            <li><a href = "Bloque3.php">Bloque 3</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Temas.php">Temas</a></li>
                    <li><a href = "TipoM.html">Tipo de material</a>
                        <ul>
                            <li><a href = "video.php">Video</a></li>
                            <li><a href = "docs.php">Material para imprimir</a></li>
                            <li><a href = "actividades.php">Actividad en linea</a></li>
                            <li><a href = "evaluacion.php">Evaluación</a></li>
                            <li><a href = "librodig.html">Libro digital</a></li>
                        </ul> 
                    </li>
                    <li><a href = "Tutorias.php">Tutorias</a></li>
                    <li><a href = "ActPerfil.php">Actualizacion de perfil</a></li>
                    <li><a href = "Soporte.php">Soporte</a></li>
                    <li><a href = "Ayuda.html">Ayuda</a></li>
                    <li><a style="color: rgb(255, 93, 93);" href = "salir.php">SALIR</a></li>
                </ul>
            </nav> 
        </div>
        <div id="contenido">
            <div id="articulo">
            <?php
                            error_reporting(0);
                            session_start();
                            include("conexion.php");
                            $sesion=$_SESSION['arc1'];
                            $id=mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre_usuario='$sesion'");
                            $row = mysqli_fetch_array($id)
                        ?>
                        <form action method="POST">
                            Nombre: <input type="text" name="nom1" required max-length="11">
                            Correo: <input type="email" name="cor1" required max-length="30">
                            Telefono: <input type="tel" name="tel1" maxlength="10" required><br/>
                            <input type="submit" name="modificar" value="Modificar">
                        </form> 
                        <?php
                            if($_POST) {
                                $nom=$_POST['nom1'];
                                $cor=$_POST['cor1'];
                                $tel=$_POST['tel1'];
                                $num=$_POST['num1'];
                                mysqli_query($conexion, "UPDATE usuario SET Nombre='$nom', Correo_electronico='$cor', Telefono='$tel' WHERE Nombre_usuario='$sesion'");
                                echo "<meta http-equiv='refresh' content='0'>";
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
