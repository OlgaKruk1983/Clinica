<?php 

$conexion = mysqli_connect("localhost","root","","clinica");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$contraseña2 = $_POST["contraseña2"];

$query = "INSERT INTO lista(nombre,email,contraseña,contraseña2)VALUES(
    '$nombre',
    '$email',
    '$contraseña',
    '$contraseña2'
)";

if($contraseña !== $contraseña2) {
    echo "
    <script>
    alert('las contraseñas no coinciden');
    window.location = 'index3.php';
    </script>
    ";
}

//CONSULTA

$consultar_correo = mysqli_query($conexion, "SELECT * FROM lista WHERE email='$email'");
if(mysqli_num_rows($consultar_correo) > 0) {
    echo "
        <script>
            alert('ya existe este correo');
            window.location = 'index3.php'
        </script>
    ";
    exit();
}

$insertar = mysqli_query($conexion, $query);
header("location: index2.php");

mysqli_close($conexion);