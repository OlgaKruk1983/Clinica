<?php
    $conexion = mysqli_connect("localhost","root","","clinica") or die("problema con la conexion");

    $registros = mysqli_query($conexion, "SELECT codigo from pacientes where codigo=$_REQUEST[codigo]") or die("problema en la select: " . mysqli_error($conexion));

    if($reg = mysqli_fetch_array($registros)){
        mysqli_query($conexion, "DELETE from pacientes where codigo=$_REQUEST[codigo]") or die("problema en la select" . mysqli_error($conexion));
        echo "se eliminó correctamente";
    }else{
        echo "no existe el paciente";

    }

    mysqli_close($conexion);
    
    
    ?>
