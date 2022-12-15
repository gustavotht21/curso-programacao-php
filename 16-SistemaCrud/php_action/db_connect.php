<?php

// Conexão com o banco de dados
$servername = 'laradock_mysql_1';
$username = 'root';
$password = 'root';
$db_name = 'crud';

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, 'utf8');

if (mysqli_connect_error()) {
    print 'Erro na conexão: ' . mysqli_connect_error();
}
