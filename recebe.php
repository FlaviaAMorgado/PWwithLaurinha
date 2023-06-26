<?php

include 'conexao.php';

    $nome = $_POST['txtnome'];
    $senha = $_POST['pssenha'];
    $sexo = $_POST['rdbsexo'];
    $estado = $_POST['estado'];

/*
    echo "Nome do cliente: {$nome}<br>";
    echo "Senha: {$senha}<br>";
    echo "Sexo: {$sexo}<br>";
    echo "Estado: {$estado}<br>";
*/

    $incluir = $cn->query("insert into tbCLiente(Nome, Senha, Sexo, Estado) values ('$nome','$senha','$sexo','$estado')");
        header('location:ok.html');
?>