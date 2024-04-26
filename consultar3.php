<?php include 'log/header.php' ?>

<?php
$conexion = mysqli_connect("localhost","root","","clinica") or die("problema con la conexion");

$registros = mysqli_query($conexion, "SELECT * FROM historial WHERE nombre_paciente='$_REQUEST[nombre_paciente]'") or die("problemas de select" .mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
    echo "<h2 style='text-align:center'>El extracto del historial del paciente: </h2>";
    echo "<p style='margin-left:300px'>Nombre del paciente es: " . $reg['nombre_paciente'] . "<br></p>";
    echo "<p style='margin-left:300px'>Código del paciente es: " . $reg['codigo_paciente'] . "<br></p>";
    echo "<p style='margin-left:300px'>Fecha de actualización es: " . $reg['fecha_actualiz'] . "<br></p>";
    echo "<p style='margin-left:300px'>Nombre de la farmacia es: " . $reg['nombre_farmacia'] . "<br></p>";
    echo "<p style='margin-left:300px'>Teléfono de la farmacia es: " . $reg['telefono_farmacia'] . "<br></p>";
    echo "<p style='margin-left:300px'>Nombre del médico es: " . $reg['nombre_medico'] . "<br></p>";
    echo "<p style='margin-left:300px'>Teléfono del médico es: " . $reg['telefono_medico'] . "<br></p>";
    echo "<p style='margin-left:300px'>La medicina recetada es: " . $reg['nombre_medic'] . "<br></p>";
    echo "<p style='margin-left:300px'>La dosis prescrita es: " . $reg['dosif'] . "<br>";
    echo "<p style='margin-left:300px'>La frecuencia de dosificación es: " . $reg['freq'] . "<br></p>";

    echo "<p style='margin-left:300px'>La fecha de inicio es: " . $reg['fecha_inicio'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de final es: " . $reg['fecha_final'] . "<br></p>";
    echo "<p style='margin-left:300px'>El propósito es: " . $reg['proposito'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de la vacuna contra tétano es: " . $reg['tetano'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de la vacuna contra influenza es: " . $reg['influenza'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de zostavax: " . $reg['zostavax'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de la vacuna contra meningitis es: " . $reg['meningitis'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de la vacuna contra fiebre es: " . $reg['fiebre'] . "<br></p>";
    echo "<p style='margin-left:300px'>La fecha de la vacuna contra polio es: " . $reg['polio'] . "<br></p>";
    

}else{
    echo "<h1 style='font-size:50px; border:20px solid blue; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>El paciente no está registrado en esta Clinica</h1>";
    
   
}

mysqli_close($conexion);





?>

<button onclick="window.print()" style="margin-left:200px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg> Imprimir</button> 