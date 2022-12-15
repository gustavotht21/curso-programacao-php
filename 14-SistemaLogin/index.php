<?php
    // Conexão com o banco de dados
    require_once './db_connect.php';

    // Sessão
    session_start();

    // Botão entrar
    if (isset($_POST['btn-entrar'])) {
        $erros = [];
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) || empty($senha)) {
            $erros[] = "<li style='color: red';>O campo de login/senha precisa ser preenchido</li>";
        } else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $result = mysqli_query($connect, $sql);

            if (! mysqli_num_rows($result) > 0) {
                $erros[] = "<li style='color: red;'>Usuário inexistente</li>";
            } else {
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $result = mysqli_query($connect, $sql);
                if (! mysqli_num_rows($result) == 1) {
                    $erros[] = "<li style='color: red;'>Credenciais incorretas</li>";
                } else {
                    $dados = mysqli_fetch_array($result);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_user'] = $dados['id'];
                    header('Location: home.php');
                }

                }
        }

    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (! empty($erros)) {
        foreach ($erros as $erro) {
            print $erro;
        }
    }
    ?>
    <hr>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <label>
            Login:
            <input type="text" name="login" required> <br>
        </label>
        <label for="">
            Senha:
            <input type="password" name="senha" required> <br>
        </label>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>