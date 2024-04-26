<?php
$login= $_POST["login"];
$password = $_POST["password"];

function check($login, $password){
    $arr=["Rita"=>"111", "Olga"=>"222", "Carlos"=>"333"];

    foreach ($arr as $key => $val){
    if($key == $password){
        echo $key. "verificado";
    }
}
}

?>