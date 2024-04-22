
<?php include 'log/header.php'?>

<?php
$conexion = mysqli_connect("localhost","root","","clinica") or die("problemas con la conexion");

mysqli_query($conexion, "UPDATE pacientes 
                set nombre='$_REQUEST[nombre]' 
                WHERE codigo='$_REQUEST[codigo]'") or die("problemas en el select" .mysqli_error($conexion));
                ?>
<?php
mysqli_query($conexion, "UPDATE pacientes 
                set habitacion='$_REQUEST[habitacion]'
                WHERE codigo='$_REQUEST[codigo]'") or die("problemas en el select" .mysqli_error($conexion));
                echo "SE MODIFICO CORRECTAMENTE";



?>


    








