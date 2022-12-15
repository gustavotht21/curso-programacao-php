<?php

// base64
$senha = '123456';
$novaSenha = base64_encode($senha);
$senha_db = '$2y$10$qg5H1oT4GFF2CbeiKEFb.efIxknIf.zQglyWvUsfLZRBW4LGZttEq';

print "<strong>base64_encode:</strong> {$novaSenha}";
print '<br>';
print "<strong>base64_decode:</strong> ".base64_decode($novaSenha);
print '<br>';

print '<hr>';

// MD5
print "<strong>md5:</strong>".md5($senha);

// Sha1
print '<hr>';
print "<strong>Sha1:</strong> ".sha1($senha);

// password_hash
print '<hr>';
print "<strong>password_hash:</strong> ".password_hash($senha, PASSWORD_DEFAULT);


print '<hr>';
// Verificador de senha. Codifica o primeiro parâmetro e compara com o outro
if (password_verify($senha, $senha_db)) {
    print 'tudo certo';
} else {
    print 'tá errado meu caro';
}
