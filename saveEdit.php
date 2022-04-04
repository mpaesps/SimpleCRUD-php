<?php
    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $nome = $user_data['nome'];
        $senha = $user_data['senha'];
        $email = $user_data['email'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];  

        $sqlUpdate = "UPDATE usuarios SET nome = '$nome', senha = '$senha', email = '$email'
        telefone = '$telefone', sexo = '$sexo', data_nasc'=$data_nasc'  WHERE id = '$id'";

        $result = $conexao->query($sqlUpdate);
    }
        header('Location: sistema.php');
?>