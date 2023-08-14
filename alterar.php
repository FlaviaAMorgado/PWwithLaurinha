<!doctype html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> Alteração de dados </title>
<?php
    include 'conexao.php';
    $cd = $_GET ['cd'];

        $consultaCampos = $cn-> query("SELECT * FROM tbl_Cliente where cd_Cliente='$cd'");
        $exibeCampos = $consultaCampos->fetch(PDO::FETCH_ASSOC);

?>
</head>
<body>
    <form name ="frmCad" action="update.php" method = "POST">
        <p> Nome: <br>
            <input type ="text" name ="txtNome" required value = "<?php echo $exibeCampos ['nm_Cliente']?>"></p>
        <p> Senha: <br>
            <input type ="password" name ="txtSenha" maxlength="6" required value = "<?php echo $exibeCampos ['ds_Senha']?>"></p>
        <p> Sexo: <br>
            <?php if ($exibeCampos ['sg_Sexo'] == "M") { ?>
                <input type ="radio" name ="rdbSexo" value ="M" checked>Masculino
                <input type ="radio" name ="rdbSexo" value ="F">Feminino
            <?php } else{ ?>
                <input type ="radio" name ="rdbSexo" value ="M">Masculino
                <input type ="radio" name ="rdbSexo" value ="F" checked>Feminino
            <?php} ?>
            </p>
            <p>
                <select name="sltEstado" required>
                    <option value="<?php echo $exibeCampos ['sg_Estado']?>"><?php echo $exibeCampos ['sg_Estado']?>
                    </option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="MG">MG</option>
                   <option value="ES">ES</option>
                </select>
            </p>
            <input type ="hidden" name ="txtCodigo" value = "<?php echo $exibeCampos ['cd_Cliente']?>">
            <p>
        </form>
</body>
</html>