<?php include 'log/header.php'?>



    <div
        class="container"
    >
    <h2 style="text-align:center;">HISTORIAL MÉDICO</h2>

        <img src="img/logo1.png" alt="" style="width:200px; margin-top:-20px;">

    
        <div>
        <div
            class="table-responsive"
        >
        <form action="historial2.php" method="post">
            <table
                class="table table-primary" style="width:800px;"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE DEL PACIENTE</th><br>
                        <th scope="col">CÓDIGO DEL PACIENTE</th><br>
                        <th scope="col">FECHA DE LA ÚLTIMA ACTUALIZACIÓN</th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="nombre_paciente" style="width: 200px;">
        <input type="text" name="codigo_paciente" style="width: 250px;">
        <input type="date" name="fecha_actualiz" style="width: 245px;">
        </div>





        <div>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary" style="width:800px;"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE ACTUAL DE LA FARMACIA</th><br>
                        <th scope="col">TELÉFONO</th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="nombre_farmacia" style="width: 350px;">
        <input type="text" name="telefono_farmacia" style="width: 350px;">
        </div>


        



        <div>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary" style="width:800px;"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE ACTUAL DEL MÉDICO</th><br>
                        <th scope="col">TELÉFONO</th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="nombre_medico" style="width: 350px;">
        <input type="text" name="telefono_medico" style="width: 350px;">
        </div>








<div>
<h5>MEDICAMENTOS ACTUALES Y PASADOS</h5>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE DEL MEDICAMENTO</th><br>
                        <th scope="col">DOSIFICACIÓN</th>
                        <th scope="col">FREQ.</th>
                        <th scope="col">MÉDICO</th>
                        <th scope="col">FECHA DE INICIO</th>
                        <th scope="col">FECHA FINAL </th>
                        <th scope="col">PROPÓSITO </th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="nombre_medic" style="width: 240px;">
        <input type="text" name="dosif" style="width: 140px;">
        <input type="text" name="freq" style="width: 50px;">
        <input type="text" name="medico" style="width: 80px;">
        <input type="date" name="fecha_inicio" style="width: 140px;">
        <input type="date" name="fecha_final" style="width: 140px;">
        <input type="text" name="proposito" style="width: 110px;">
        </div>





        <div>
<h5>PROCEDIMIENTOS QUIRÚRGICOS</h5>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">PROCEDIMIENTO</th><br>
                        <th scope="col">MÉDICO</th>
                        <th scope="col">HOSPITAL</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">NOTAS</th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="" style="width: 280px;">
        <input type="text" name="" style="width: 160px;">
        <input type="text" name="" style="width: 190px;">
        <input type="date" name="" style="width: 100px;">
        <input type="text" name="" style="width: 180px;">
        </div>





        <div>
<h5>ENFERMEDADES GRAVES</h5>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ENFERMEDAD</th><br>
                        <th scope="col">FECHA DE INICIO</th>
                        <th scope="col">FECHA FINAL</th>
                        <th scope="col">MÉDICO</th>
                        <th scope="col">NOTAS DE TRATAMIENTO</th>
                    </tr>
                </thead>
            </table>
        </div>
        <input type="text" name="" style="width: 170px;">
        <input type="date" name="" style="width: 170px;">
        <input type="date" name="" style="width: 170px;">
        <input type="text" name="" style="width: 120px;">
        <input type="text" name="" style="width: 280px;">
        </div>
<br>
<!-----izquierda----->
        <div style="float: left; border:1px solid black; padding:20px; width: 450px;">
        <h5>VACUNAS</h5>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA</th>
                    </tr>
                </thead>
            </table>
            TÉTANOS <input type="date" name="tetano" style="margin-left:160px;"><br><br>
            VACUNA CONTRA <br> LA INFLUENZA <input type="date" name="influenza" style="margin-left:122px;"><br><br>
            ZOSTAVAX <input type="date" name="zostavax" style="margin-left:150px;"><br><br>
            OTRO: <input type="date" name="" style="margin-left:180px;">
        </div>
        
    
    </div>




    <!-----derecha----->
    <div style="float: right; border:1px solid black; padding:20px; width: 450px;">
    
    <h5>VACUNAS</h5>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA</th>
                    </tr>
                </thead>
            </table>
            MENINGITIS <input type="date" name="meningitis" style="margin-left:140px;"><br><br>
            FIEBRE AMARILLA <input type="date" name="fiebre" style="margin-left:100px;"><br><br>
            POLIOMIELITIS <input type="date" name="polio" style="margin-left:122px;"><br><br>
            OTRO: <input type="date" name="" style="margin-left:182px;">
        </div>
        <br>
    </div>
    
    </div>
</div>


<div>
    <button type="submit" value="registrar" style="margin-left:40px; margin-top:20px">Registrar</button>
    

    <button type="reset" style="margin-left:780px;">Borrar</button>
    </div>
    <br>

    <button onclick="window.print()" style="margin-left:50px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg></button> 
</form>
<br>



    
    <br><br>





        





