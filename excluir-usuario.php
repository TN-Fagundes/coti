<?php

    $cod = base64_decode($_GET['cod']);

    include_once 'config/conexao.php';

    $stmt = $con->prepare("UPDATE usuario SET ativo = false WHERE cod = ?");

    $stmt->bindParam(1, $cod);

    //Se a código SQL foi executado
    if($stmt->execute()){
        $msg = 'Usuário excluído com sucesso!';
    }else{
        $msg = 'Não foi possível excluir o usuário!';
    }
?>
    
<script>
    alert('<?php echo $msg; ?>');
    location.href = 'consultar-usuario.php';
</script>