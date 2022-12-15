<?php
//Sessão
session_start();
if (isset($_SESSION['mensagem'])) { ?>
    <script>
        window.onload = function () {
            M.toast({html: '<?=$_SESSION['mensagem'];?>', classes: "<?=strpos($_SESSION['mensagem'], "sucesso") ? 'green lighten-1' : 'red lighten-1'?>"})
        };
    </script>
    <?php
}
session_unset();

