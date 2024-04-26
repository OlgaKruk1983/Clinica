<?php include 'log/header.php'?>

<div
    class="container"
>
<h2 style="text-align:center;">PLANTILLA DE PROGRESO MÉDICO</h2>


<div>
<img src="img/logo1.png" alt="" style="width:200px; margin-top:-20px;">
</div>

<form action="progreso2.php" method="post">
<!-----izquierda----->
<div style="float:left;">

<p><b>NOMBRE DEL PACIENTE</b></p>
<input type="text" name="nombre_paciente"><br>
<p><b>FECHA DE NACIMIENTO</b></p>
<input type="date" name="fecha_nacim" style="width:190px;"><br>
<p><b>CÓDIGO DEL PACIENTE</b></p>
<input type="text" name="codigo_paciente"><br>
<p><b>IDENTIFICACIÓN DE REGISTRO MÉDICO</b></p>
<input type="text" name="identif"><br>
<p><b>PRÓXIMA FECHA DE CITA</b></p>
<input type="date" name="fecha_cita" style="width:190px;"><br>
<p><b>PRÓXIMA FECHA DE REVISIÓN SEGÚN EL PLAN</b></p>
<input type="date" name="fecha_revision" style="width:190px;"><br>

<hr style="width:200px;">
</div>


<!-----derecha----->

<div style="float:right;">

<h5>PROGRESO DEL PACIENTE</h5>

<div
    class="table-responsive" style="width:500px;"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col" style="width: 100px; font-size:12px;">FECHA</th>
                <th scope="col" style="font-size:12px;">NOTAS DE PROGRESO
</th>
            </tr>
        </thead>
        
    </table>

    <table>
    <input type="date" name="nota1" style="width:100px;">
    <input type="text" name="nota2" style="width:400px;">
    <input type="date" name="nota3" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">
    <input type="date" name="" style="width:100px;">
    <input type="text" name="" style="width:400px;">

    </table>
</div>
</div>
</div>

<div>
    <button type="submit" value="enviar" style="margin-left:10px; margin-top:470px;">Enviar</button>
    <br>

    
</form>




