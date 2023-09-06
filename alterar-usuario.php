<?php

    //Resgate dos dados vindo pelo form
    $cod = $_POST["cod"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
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
    $stmt = $con->prepare("UPDATE usuario SET nome = ?, email = ?, login = ?, perfil = ? WHERE cod = ?");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $login);
    $stmt->bindParam(4, $perfil);
    $stmt->bindParam(5, $cod);

    //Se a código SQL foi executado
    if($stmt->execute()){
        $msg = 'Usuário alterado com sucesso!';
    }else{
        $msg = 'Não foi possível salvar as alterações!';
    }
?>

<script>

    alert('<?php echo $msg; ?>'); //caixa de diáglogo
    location.href='consultar-usuario.php'; //redirecionamento

</script>