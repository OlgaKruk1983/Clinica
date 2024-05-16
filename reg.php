<?php
$usuario = "Olga";
$password = "1234";

if($usuario == "Olga" && $password == "1234"){
    header('location: historial.php');
    
}else{
    echo "los datos son incorrectos";
    exit();
}



?>