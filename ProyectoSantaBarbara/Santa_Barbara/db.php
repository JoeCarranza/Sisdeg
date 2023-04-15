<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "root123";
    $dbname = "bdmunisantabarbara_2";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}

?>