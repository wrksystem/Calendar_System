<?php
include("config.php");

$conection = mysqli_connect(
    SERVER, 
    USER, 
    PASS, 
    DBNAME
    ) or die("Erro na conexão com o servidor!" . mysqli_connect_error());

?>