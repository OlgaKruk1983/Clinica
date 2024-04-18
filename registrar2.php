<?php include 'log/header.php'?>

<?php
$conexion = mysqli_connect("localhost","root","","clinica") or die("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO pacientes(codigo, nombre, habitacion)VALUES($_REQUEST[codigo], '$_REQUEST[nombre]', $_REQUEST[habitacion])") or die("problema en la select: " .mysqli_error($conexion));

mysqli_close($conexion);
echo "<h1 style='font-size:50px; border:20px solid blue; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>El paciente ha sido registrado</h1>";


?>