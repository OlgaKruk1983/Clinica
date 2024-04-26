<?php include 'log/header.php' ?>

<?php
$conexion = mysqli_connect("localhost","root","","clinica") or die("problema con la conexion");

$registros = mysqli_query($conexion, "SELECT * FROM progreso WHERE nombre_paciente='$_REQUEST[nombre_paciente]'") or die("problemas de select" .mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
    echo "<h2 style='text-align:center'>El progreso del paciente es el siguinte: </h2>";
    echo "<p style='margin-left:300px'>1. Nombre del paciente es: " . $reg['nombre_paciente'] . "<br></p>";
    echo "<p style='margin-left:300px'>2. Código del paciente es: " . $reg['codigo_paciente'] . "<br></p>";
    echo "<p style='margin-left:300px'>3. Fecha de nacimiento es: " . $reg['fecha_nacim'] . "<br></p>";
    echo "<p style='margin-left:300px'>4. Código de identificación es: " . $reg['identif'] . "<br></p>";
    echo "<p style='margin-left:300px'>5. Fecha de la próxima cita es: " . $reg['fecha_cita'] . "<br></p>";
    echo "<p style='margin-left:300px'>6. Fecha de la revisión es: " . $reg['fecha_revision'] . "<br></p>";
    echo "<p style='margin-left:300px'>7.La nota 1 del médico es: " . $reg['nota1'] . "<br></p>";
    echo "<p style='margin-left:300px'>8. La nota 2 del médico es: " . $reg['nota2'] . "<br></p>";
    echo "<p style='margin-left:300px'>9. La nota 3 del médico es: " . $reg['nota3'] . "<br></p>";
    

}else{
    echo "<h1 style='font-size:50px; border:20px solid blue; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>El paciente no está registrado en esta Clinica</h1>";
    
   
}

mysqli_close($conexion);





?>

<button onclick="window.print()" style="margin-left:200px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg> Imprimir</button> 