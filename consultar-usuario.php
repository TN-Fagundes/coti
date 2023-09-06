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
                    <h1 class="my-4">Consulta de Usuários</h1>

                    <form action="consultar-usuario.php" method="get" autocomplete="off">

                        <div class="d-flex w-50">
                            <input type="text" class="form-control" placeholder="Digite para pesquisar" name="busca">
                            <button class="btn btn-primary ms-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                    </form>

                    <div class="mt-4">

                        <?php
                        //se $_GEt['busca'] é diferente de NULL (se existe)
                        if (isset($_GET["busca"])) {

                            $busca = trim($_GET["busca"]); //resgatando o valor do formulário
                            //echo $busca;

                            include_once 'config/conexao.php';

                            //SELECT * FROM usuario WHERE nome LIKE 'a%';
                            $stmt = $con->prepare('SELECT * FROM usuario WHERE ativo = 1 AND nome LIKE "%" ? "%" OR email LIKE "%" ? "%" OR login LIKE "%" ? "%" ');
                            $stmt->bindParam(1, $busca);
                            $stmt->bindParam(2, $busca);
                            $stmt->bindParam(3, $busca);

                            //Executando a busca no banco
                            $stmt->execute();

                            //se o banco retornou algum registro
                            if ($stmt->rowCount() > 0) {
                                //echo 'encontrou!';
                        ?>

                                <table class="table">
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Login</th>
                                        <th>Perfil</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Excluir</th>
                                    </tr>


                                    <?php
                                    //Pega os dados da próxima linha
                                    while ($row = $stmt->fetch()) {
                                        //var_dump($row);
                                    ?>

                                        <tr>
                                            <td><?php echo $row["nome"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["login"]; ?></td>
                                            <td><?php echo $row["perfil"]; ?></td>
                                            <td class="text-center">
                                                <a href="editar-usuario.php?cod=<?php echo base64_encode($row['cod']); ?>" class="text-primary"><i class="fa-solid fa-user-pen"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-danger" onclick="confirmDelete('<?php echo base64_encode($row['cod']); ?>', 
                                                                                                       '<?php echo $row['nome']; ?>');">
                                                    <i class="fa-solid fa-user-xmark"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php } //fim do loop 
                                    ?>

                                </table>



                        <?php
                            } else {
                                echo 'Nenhum usuário encontrado!';
                            }
                        }

                        ?>

                    </div>


                </div>
            </main>

            <?php include "layout/footer.php"; ?>

        </div>

    </div>


    <?php include 'layout/modal.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        function confirmDelete(cod, nome) {
            //alert(cod);
            if (confirm('Deseja realmente excluir '+nome+'?'))
                location.href='excluir-usuario.php?cod='+cod;
        }
    </script>
</body>

</html>