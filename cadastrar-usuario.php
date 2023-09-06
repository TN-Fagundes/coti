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
                    <h1 class="my-4">Cadastro de Usuário</h1>                                        
                    <p>Preencha as informações abaixo</p>

                    <!-- Nome, E-mail, Login, Senha, Perfil -->
                    <form class="w-50" action="gravar-usuario.php" method="post">

                        <div class="mb-2">
                            <label for="nome">Digite o nome</label>
                            <input type="text" id="nome" name="nome" required placeholder="Ex: João da Silva" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="email">Digite o e-mail</label>
                            <input type="email" id="email" name="email" required placeholder="Ex: joao@gmail.com" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="login">Digite o login</label>
                            <input type="text" id="login" name="login" required placeholder="Ex: joaosilva" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="senha">Digite a senha</label>
                            <input type="password" id="senha" name="senha" required placeholder="*********" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="perfil">Escolha o perfil</label>
                            <select class="form-select" name="perfil" required>
                                <option value="" disabled selected>Escolha</option>
                                <option value="user">Usuário</option>
                                <option value="adm">Administrador</option>
                            </select>
                        </div>

                        <button class="btn btn-primary">Realizar cadastro</button>

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