<?php include 'log/header.php'?>


<?php
$conexion= mysqli_connect("localhost","root","","clinica") or die("problemas de conexion");
mysqli_query($conexion, "INSERT INTO facturacion(clinica,direccion_clinica, fecha_inicio,fecha_final,nombre_cliente,direccion_cliente,precio_consulta)VALUES('$_REQUEST[clinica]', '$_REQUEST[direccion_clinica]', '$_REQUEST[fecha_inicio]', '$_REQUEST[fecha_final]', '$_REQUEST[nombre_cliente]', '$_REQUEST[direccion_cliente]', '$_REQUEST[precio_consulta]')") or die("problemas con la conexion" . mysqli_error($conexion));
    
    
    mysqli_close($conexion);

    echo "Los datos del paciente fueron guardados correctamente";


?>