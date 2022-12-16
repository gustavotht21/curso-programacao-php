<?php

$arquivo = 'arquivo.txt';

//$arquivoAberto = fopen($arquivo, 'a+');
//
//$conteudo = "Conteudo de teste\r\n";
//fwrite($arquivoAberto, $conteudo);
//
//fclose($arquivo);

$arquivoAberto = fopen($arquivo, 'r');
while (!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, 4096);
    print $linha;
}
fclose($arquivo);