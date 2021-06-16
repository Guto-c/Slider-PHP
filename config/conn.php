<?php
/*
 * conn
 */
$server = "localhost";
$user  = "root";
$pass    = "";
$dbname   = "slider";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(!$conn){
    die("Falha na Conexao: ".mysqli_connect_error());
}
