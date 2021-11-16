<?php

$con = mysqli_connect('localhost', 'root', '', 'sa_back_end');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }

//Orientado a objeto

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'sa_back_end';

$mysqli = new mysqli($host,$usuario,$senha,$database);
    if($mysqli -> error){
        die("Falha ao conectar ao banco de dados ". $mysqli -> error);
    }
?>