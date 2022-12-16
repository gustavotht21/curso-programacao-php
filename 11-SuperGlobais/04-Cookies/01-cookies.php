<?php

setcookie('user', 'Gustavo Borges', time()+3600);
setcookie('email', 'borgesgustavo360@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'teclado logitech', time()+3600);

print $_COOKIE['ultima_pesquisa'];

