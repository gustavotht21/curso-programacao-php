<?php
if (isset($_POST['enviar'])) {
    $erros = [];
    if (! $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
        $erros[] = 'Idade precisa ser um inteiro';
    } if (! $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Email inválido';
    } if (! $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = 'Peso precisa ser um float';
    } if (! $ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
        $erros[] = 'Ip inválido';
    } if (! $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
        $erros[] = 'Link inválido';
    }

    if (! empty($erros)) {
        foreach ($erros as $erro) {
            print "<li> $erro </li>";
        }
    } else {
        print "<script>alert(\"Sem erros\")</script>";
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
    <title>Document</title>
</head>
<body>
    <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
        <label for="email">
            Email <br>
            <input type="text" name="email" placeholder="Email">
        </label> <br> <br>
        <label for="idade">
            Idade <br>
            <input type="text" name="idade" placeholder="Idade">
        </label> <br> <br>
        <label for="peso">
            Peso <br>
            <input type="text" name="peso" placeholder="Peso">
        </label> <br> <br>
        <label for="ip">
            IP <br>
            <input type="text" name="ip" placeholder="IP">
        </label> <br> <br>
        <label for="url">
            URL <br>
            <input type="text" name="url" placeholder="URL">
        </label> <br> <br>
        <button type="submit" name="enviar">
            Enviar
        </button>
    </form>
</body>
</html>