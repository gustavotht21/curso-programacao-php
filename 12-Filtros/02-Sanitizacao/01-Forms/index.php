<?php
if (isset($_POST['enviar'])) {
    $erros = [];

    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(! filter_var($idade, FILTER_VALIDATE_INT)) {
        $erros[] = 'Idade precisa ser um inteiro';
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Email inválido';
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(! filter_var($url, FILTER_VALIDATE_URL)) {
        $erros[] = 'URL inválida';
    }

    if (! empty($erros)) {
        foreach ($erros as $erro) {
            print "<li> $erro </li>";
        }
    } else {
        print 'Sem erros';
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
        <label for="name">
            Nome <br>
            <input type="text" name="name" placeholder="Nome">
        </label> <br> <br>
        <label for="email">
            Email <br>
            <input type="text" name="email" placeholder="Email">
        </label> <br> <br>
        <label for="idade">
            Idade <br>
            <input type="text" name="idade" placeholder="Idade">
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