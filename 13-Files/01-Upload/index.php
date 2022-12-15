<?php

if (isset($_POST['enviar'])) {
    $extensions = ['png', 'jpg', 'jpeg', 'svg', 'gif'];
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    if (in_array($extension, $extensions)) {
        $path = 'files/';
        $filePath = $_FILES['file']['tmp_name'];
        $newName = uniqid()."{$extension}";

        if (move_uploaded_file($filePath, $path.$newName)) {
            $message = 'Ok';
        } else {
            $message = 'Erro no upload';
        }
    } else {
        $message = 'Formato inválido';
    }
}

print $message;

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
    <form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="name">
            <input type="file" name="file">
        </label>
        <button type="submit" name="enviar">
            Enviar
        </button>
    </form>
</body>
</html>