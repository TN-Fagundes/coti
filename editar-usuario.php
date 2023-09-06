<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Projeto PHP - Coti Informática</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'layout/header.php'; ?>

    <div id="layoutSidenav">

        <?php include 'layout/sidebar.php'; ?>

        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">Alteração de Usuário</h1>

                    <?php
                    include_once 'config/conexao.php';

                    $cod = base64_decode($_GET["cod"]);

                    $stmt = $con->prepare('SELECT * FROM usuario WHERE cod = ?');
                    $stmt->bindParam(1, $cod);
                    $stmt->execute();

                    $usuario = $stmt->fetch();
                    ?>

                    <!-- Nome, E-mail, Login, Senha, Perfil -->
                    <form class="w-50" action="alterar-usuario.php" method="post">

                        <input type="hidden" name="cod" value="<?php echo $usuario['cod']; ?>">

                        <div class="mb-2">
                            <label for="nome">Digite o nome</label>
                            <input type="text" id="nome" name="nome" required placeholder="Ex: João da Silva" class="form-control" value="<?php echo $usuario['nome']; ?>">
                        </div>

                        <div class="mb-2">
                            <label for="email">Digite o e-mail</label>
                            <input type="email" id="email" name="email" required placeholder="Ex: joao@gmail.com" class="form-control" value="<?php echo $usuario['email']; ?>">
                        </div>

                        <div class="mb-2">
                            <label for="login">Digite o login</label>
                            <input type="text" id="login" name="login" required placeholder="Ex: joaosilva" class="form-control" value="<?php echo $usuario['login']; ?>">
                        </div>

                        <div class="mb-2">
                            <label for="perfil">Escolha o perfil</label>
                            <select class="form-select" name="perfil" required>
                                <option value="" disabled selected>Escolha</option>
                                <option value="user" <?php if ($usuario['perfil'] == 'user') echo 'selected'; ?>>Usuário</option>
                                <option value="adm" <?php if ($usuario['perfil'] == 'adm') echo 'selected'; ?>>Administrador</option>
                            </select>
                        </div>

                        <button class="btn btn-primary">Salvar alterações</button>

                    </form>

                </div>
            </main>

            <?php include "layout/footer.php"; ?>

        </div>

    </div>


    <?php include 'layout/modal.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>