<?php
// Conexão com o banco de dados
$servername = "laradock_mysql_1";
$username = "root";
$password = "root";
$db_name = "sistemalogincurso";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
    print "Falha na conexão com o banco de dados: " . mysqli_connect_error();
}
