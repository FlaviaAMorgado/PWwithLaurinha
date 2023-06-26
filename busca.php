<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php
        include 'conexao.php';
    ?>

</head>

<body>
    
    <h1>Localizar CLiente</h1>
        <form name="frmPesquisa" method="get" action="busca.php">
        <p>Informer o nome do cliente <br>
            <input type="text" name="txtBusca" required>
            <input type="submit" value="Procurar">
        </p>
        </form>
        <br>
        <?php
        if(!isset($_GET["txtBusca"])){
            echo "";

        }
        else {
            $nome = $_GET ['txtBusca'];
            $buscacliente = $cn ->query ("select * from tbCliente where Nome like '%$nome%'");


        ?>
        
        <table border="1" width="80%">
            <tr>
                <th width="10%">&nbsp Código &nbsp</th>
                <th width="20%">&nbsp Cliente &nbsp</th>
                <th width="10%">&nbsp Senha &nbsp</th>
                <th width="10%">&nbsp Sexo &nbsp</th>
                <th width="10%">&nbsp Estado &nbsp</th>
                <th width="10%">&nbsp Alterar &nbsp</th>
                <th width="10%">&nbsp Excluir &nbsp</th>
            </tr>

            <?php
                while ($vetor = $buscacliente-> fetch (PDO::FETCH_ASSOC)){
            ?>

            <tr>
                <td width="10%"><?php echo $vetor ['Cod']; ?></td>
                <td width="20%"><?php echo $vetor ['Nome']; ?></td>
                <td width="10%"><?php echo $vetor ['Senha']; ?></td>
                <td width="10%"><?php echo $vetor ['Sexo']; ?></td>
                <td width="10%"><?php echo $vetor ['Estado']; ?></td>
                <th width="10%">&nbsp Alterar &nbsp</th>
                <th width="10%">&nbsp Excluir &nbsp</th>
            </tr>
        <?php } ?>
        </table>
        <?php } ?>
</body>
</html>