<?php require_once 'log/header.php'?>


<div
    class="container"
>
<br>    
<form action="consultar2.php" method="post">
        <h4>Consultar el progreso</h4> 
        <p>Introduzca el nombre del paciente</p>
        <input type="text" name="nombre_paciente">
        <Button type="submit" value="consultar">Consultar</Button>

    </form>

    <form action="consultar3.php" method="post">
    <h4>Consultar el historial</h4>
    <p>Introduzca el nombre del paciente</p>
     <input type="text" name="nombre_paciente">
        <Button type="submit">Consultar</Button><br><br>

    </form>
</div>


<script>
    /**Поставить пароль на поле* let miUsuario = prompt("Ingrese el usuario");
    const usuario = "olga";

    let miContraseña =parseInt(prompt("ingrese la contraseña"));
    const contraseña = 1234;

    if(miUsuario == usuario && miContraseña === contraseña) {
        alert("pulsa para entrar");
    } else {
        alert(`usuario -> ${miUsuario} o contraseña desconocidos`);
        window.location= "historial.php";
    }*/
</script>


