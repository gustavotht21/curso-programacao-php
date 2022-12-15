<?php

//Conexão
require_once 'php_action/db_connect.php';

// Header
include_once 'includes/header.php';

// Message
include_once 'includes/message.php';
?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td><?=$dados['nome']?></td>
                        <td><?=$dados['sobrenome']?></td>
                        <td><?=$dados['email']?></td>
                        <td><?=$dados['idade']?></td>
                        <td>
                            <a href="editar.php?id=<?=$dados['id']?>" class="btn-floating blue">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            <a href="#modal<?=$dados['id']?>" class="btn-floating red modal-trigger">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>

                        <div id="modal<?=$dados['id']?>" class="modal">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Você tem certeza que deseja excluir o cliente "<?=$dados['nome']?>"?</p>
                            </div>
                            <div class="modal-footer">

                                <form action="php_action/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?=$dados['id']?>" />
                                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </tr>
                <?php
                }
            } else { ?>
                <td>- - - - - -</td>
                <td>- - - - - -</td>
                <td>- - - - - -</td>
                <td>- - - - - -</td>
            <?php
            }
            ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>