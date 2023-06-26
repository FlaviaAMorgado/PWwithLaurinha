<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="
        Autor:Daniel Biondi
        !!TESTE!!
    "/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Teste</title>
</head>
<body>
    <div id="main">
        <form name="form" method="post" action="recebe.php">
            
            <div>
                <label>Nome:</label>
                <input type="text" name="txtnome"/>
            </div>

            <br>

            <div>
                <label>Senha:</label>
                <input type="password" name="pssenha"/>
            </div>

            <br>
        
            <div>
                <label>Sexo:</label>
                <br>
                <input type="radio" name="rdbsexo" value="M"/>
                <label>Masculino</label>
                <br>
                <input type="radio" name="rdbsexo" value="F"/>
                <label>Feminino</label>
            </div>

            <br>

            <div>
                <label>Estado:</label>
                <select name="estado">
                    <option value="AC">Acre(AC)</option>
                    <option value="AL">Alagoas(AL)</option>
                    <option value="AP">Amapá(AP)</option>
                    <option value="AM">Amazonas(AM)</option>
                    <option value="BA">Bahia(BA)</option>
                    <option value="CE">Ceará(CE)</option>
                    <option value="ES">Espirito Santo(ES)</option>
                    <option value="GO">Goiás(GO)</option>
                    <option value="MA">Maranhão(MA)</option>
                    <option value="MT">MAto Grosso(MT)</option>
                    <option value="MG">Minas Gerais(MG)</option>
                    <option value="PA">Pará(PA)</option>
                    <option value="PB">Paraíba(PB)</option>
                    <option value="PR">Paraná(PR)</option>
                    <option value="PE">Pernanmbuco(PE)</option>
                    <option value="PI">Piauí(PI)</option>
                    <option value="RJ">Rio de Janeiro(RJ)</option>
                    <option value="RN">Rio Grande do Norte(RN)</option>
                    <option value="RS">Rio Grande do Sul(RS)</option>
                    <option value="RO">Rondônia(RO)</option>
                    <option value="RR">Roraima(RR)</option>
                    <option value="SC">Santa Catarina(SC)</option>
                    <option value="SP">São Paulo(SP)</option>
                    <option value="SE">Sergipe(SE)</option>
                    <option value="TO">Tocantis(TO)</option>
                    <option value="DF">Distrito Federal(DF)</option>
                </select>
            </div>

            <br>

            <input type="submit" name="Enviar" value="Enviar"/>

        </form>

    </div>
</body>
</html>