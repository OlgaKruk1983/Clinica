<?php
$conexion= mysqli_connect("localhost","root","","clinica") or die("problemas de conexion");
mysqli_query($conexion, "INSERT INTO historial(nombre_paciente,codigo_paciente,fecha_actualiz, nombre_farmacia,telefono_farmacia,nombre_medico,telefono_medico,nombre_medic,dosif,freq,medico,fecha_inicio,fecha_final,proposito,tetano,influenza,zostavax,meningitis,fiebre,polio)VALUES('$_REQUEST[nombre_paciente]', '$_REQUEST[codigo_paciente]', '$_REQUEST[fecha_actualiz]', '$_REQUEST[nombre_farmacia]', '$_REQUEST[telefono_farmacia]', '$_REQUEST[nombre_medico]', '$_REQUEST[telefono_medico]', '$_REQUEST[nombre_medic]', '$_REQUEST[dosif]', '$_REQUEST[freq]', '$_REQUEST[medico]', '$_REQUEST[fecha_inicio]', '$_REQUEST[fecha_final]', '$_REQUEST[proposito]', '$_REQUEST[tetano]', '$_REQUEST[influenza]', '$_REQUEST[zostavax]', '$_REQUEST[meningitis]', '$_REQUEST[fiebre]', '$_REQUEST[polio]')") or die("problemas con la conexion" . mysqli_error($conexion));
    
    
    mysqli_close($conexion);

    echo "Los datos del paciente fueron guardados correctamente";


?>