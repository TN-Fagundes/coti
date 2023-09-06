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
                    <h1 class="my-4">Painel do Sistema</h1>
                                        
                    <p>Olá <strong>David Borges</strong>! Escolha uma das opções no menu.</p>

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