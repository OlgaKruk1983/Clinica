<?php include 'log/header.php'?>

<div
    class="container"
>
<!-----izquierda----->
<div style="float: left; margin-left: 200px; margin-top: 20px;">
<img src="img/logo1.png" alt="" style="width:260px; border: 2px solid black; background-color:white">

<form action="facturacion2.php" method="post">

<div class="mb-3">
    <label for="" class="form-label"><b>DE</b></label>
    <input
        type="text"
        class="form-control"
        name="clinica"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion de clinica</h5></label>
    <textarea class="form-control" name="direccion_clinica" id="" rows="3"></textarea>
</div>
</div>
<br>    

<!-----derecha----->
<div style="float: right; margin-top: 20px;">
<h2 style="border: 2px solid; background-color:white">PRESUPUESTO</h2>


<div class="mb-3">
    <label for="" class="form-label"><h5>Fecha presupuesto</h5></label>
    <input
        type="date"
        class="form-control"
        name="fecha_inicio"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Fecha vencimineto</h5></label>
    <input
        type="date"
        class="form-control"
        name="fecha_final"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Presupuesto a:</h5></label>
    <input
        type="text"
        class="form-control"
        name="nombre_cliente"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion del cliente</h5></label>
    <textarea class="form-control" name="direccion_cliente" id="" rows="3"></textarea>
</div>
</div>
</div>





<div
    class="container"
>
<div style="padding:10px; background-color: blue; margin-top:450px; width:735px; margin-left:200px; text-align:center;">

Calcular Presupuesto

</div>
    
</div>




<div
    class="container"
    style="float:left; margin-left:222px"


>
    <div class="mt-4 p-5 bg-primary text-white rounded" style="width:300px; height: 240px;">
    CITA MÉDICA(INCLUYE):
    <ul>
        <li>Cita personalizada</li>
        <li>Toma de examenes</li>
        <li>Seguimiento</li>
    </ul>

    </div>
</div>




<div>
    <div class="mb-3" style="float:right; margin-top:-210px; margin-right:40px">
        <label for="" class="form-label"><h5>Número de consultas</h5></label>
        <input
            type="number"
            class="form-control"
            name=""
            id="valor1"
            aria-describedby="helpId"
            placeholder=""
            oninput="Total()"
        />

        <label for="" class="form-label"><h5>Abono</h5></label>
        <input
            type="text"
            class="form-control"
            name=""
            id="valor2"
            aria-describedby="helpId"
            placeholder=""
            oninput="Total()"
        />

        <label for="" class="form-label"><h5>Total a pagar</h5></label>
        <input
            type="text"
            class="form-control"
            name="precio_consulta"
            id="total"
            aria-describedby="helpId"
            placeholder=""
            oninput=""
        />


    </div>


    <script>
function Total(){
    try{
        var a=parseFloat(document.getElementById("valor1").value) || 0;
        var b=parseFloat(document.getElementById("valor2").value) || 0;
        document.getElementById("total").value=a*50-b;
    }catch(e){}
}
        
    </script>
    

    <button onclick="window.print()" style="margin-left:900px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg></button> 


<button type="submit" value="registrar">Registrar</button>

</div>

</form>

<br><br><br><br>
