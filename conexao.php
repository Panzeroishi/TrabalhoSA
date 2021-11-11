<?php

/*$con = mysqli_connect('localhost', 'root', '', 'sa_back_end');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }
*/

//Orientado a objeto

$usuario = 'root';
$senha = '';
$database = 'sa_back_end';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);
    if($mysqli -> error){
        die("Falha ao conectar ao banco de dados ". $mysqli -> error);
    }
?>