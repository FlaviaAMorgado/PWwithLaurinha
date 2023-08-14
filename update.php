<?php
include 'conexao.php';

$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];
$sexo = $_POST["rdbSexo"];
$estado = $_POST["sltEstado"];
$cd = $_POST["txtCodigo"];

$atualizar = $cn->query("udaqte tbl_Cliente set nm_Cliente='$nome', ds_Senha='$senha', sg_Sexo='$sexo, sg_Estado = '$estado' where cd_Cliente = $cd");

header('location:okalterado.html');
?>
