<?php
// Conexão com o banco de dados
require_once './db_connect.php';

// Sessão
session_start();

// Verificando sessão
if (! isset($_SESSION['logado'])) {
    header('Location: index.php');
}

// Dados
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($result);
mysqli_close($connect);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Página restrita</h1>

    <h3 style="color: chartreuse;">Sejá bem-vindo <?=$dados['nome']?>!</h3>

    <a style="padding: 10px; background-color: red; color: aliceblue; border-radius: 10px" href="logout.php">Logout</a>
</body>
</html>