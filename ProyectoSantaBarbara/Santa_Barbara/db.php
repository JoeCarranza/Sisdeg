<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "einstein312";
    $dbname = "bdmunisantabarbara";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}

?>