<?php

$conexion = mysqli_connect("localhost","root","","clinica");

$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];

$iniciar = mysqli_query($conexion, "SELECT * FROM lista WHERE nombre='$nombre' AND contraseña='$contraseña'");

if(mysqli_num_rows($iniciar) > 0) {
    header("location: historial.php");
    exit();
} else {
    echo "
    <script>
        alert('nombre o contraseña no coinciden');
        window.location = 'index2.php';
    </script>
    ";
}