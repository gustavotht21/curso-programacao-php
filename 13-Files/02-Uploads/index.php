<?php

if (isset($_POST['enviar'])) {
    $extensions = ['png', 'jpg', 'jpeg', 'svg', 'gif'];
    for ($i=0; $i<count($_FILES['file']['name']); $i++) {
        $extension = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
        if (in_array($extension, $extensions)) {
            $path = 'files/';
            $filePath = $_FILES['file']['tmp_name'][$i];
            $newName = uniqid() . "{$extension}";

            if (move_uploaded_file($filePath, $path . $newName)) {
                print 'Ok';
            } else {
                print 'Erro no upload';
            }
        } else {
            print 'Formato inválido';
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
    <title>Document</title>
</head>
<body>
    <form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="name">
            <input type="file" name="file[]" multiple>
        </label>
        <button type="submit" name="enviar">
            Enviar
        </button>
    </form>
</body>
</html>