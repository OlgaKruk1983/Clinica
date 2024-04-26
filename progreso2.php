<?php include 'log/header.php'?>


<?php
$conexion= mysqli_connect("localhost","root","","clinica") or die("problemas de conexion");
    mysqli_query($conexion, "INSERT INTO progreso(nombre_paciente,fecha_nacim,codigo_paciente,identif,fecha_cita,fecha_revision,nota1,nota2,nota3)VALUES('$_REQUEST[nombre_paciente]', '$_REQUEST[fecha_nacim]', '$_REQUEST[codigo_paciente]', '$_REQUEST[identif]', '$_REQUEST[fecha_cita]', '$_REQUEST[fecha_revision]', '$_REQUEST[nota1]', '$_REQUEST[nota2]', '$_REQUEST[nota3]')") or die("problemas con la conexion" . mysqli_error($conexion));
    
    
    mysqli_close($conexion);

    echo "El progreso del paciente fue registrado correctamente";


?>