<?php

    //Resgate dos dados vindo pelo form
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];

    /*
    echo "Nome: ".$nome;
    echo "<br>E-mail: ".$email;
    echo "<br>Login: ".$login;
    echo "<br>Senha: ".$senha;
    echo "<br>Perfil: ".$perfil;
    */

    include_once 'config/conexao.php';

    //Preparar o código SQL que será executado no BD
    $stmt = $con->prepare("INSERT INTO usuario VALUES(null, ?,?,?,?,?)");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $login);
    $stmt->bindParam(4, $senha);
    $stmt->bindParam(5, $perfil);

    //Se a código SQL foi executado
    if($stmt->execute()){
        $msg = 'Dados gravados com sucesso!';
    }else{
        $msg = 'Não foi possível realizar o cadastro!';
    }
?>

<script>

    alert('<?php echo $msg; ?>'); //caixa de diáglogo
    location.href='cadastrar-usuario.php'; //redirecionamento

</script>