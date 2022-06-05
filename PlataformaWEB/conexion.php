<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$bd="base";
	$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
    if ($conexion->connect_error) {
        die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
    }
?>