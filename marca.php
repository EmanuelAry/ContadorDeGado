<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="post" action="acao.php">

    <table border = 1px>
        <tr>
        <th>Nome Fazendeiro</th>
        <th>Numero do Brinco</th>
        <th>Idade</th>
        <th>Sexo</th>
        <th>Peso</th>
        <th>Valor</th>
        <th>Observações</th>
        </tr>
        <tr>
        <td><input name="nomFaz" type="text"></td>
        <td><input name="NumeroBrinco" type="int"></td>
        <td><input name="idade" type="int"></td>
        <td><input name="sexo" type="radio" value = 1>Macho<br>
            <input name="sexo" type="radio" value = 2>Fêmea</td>
        <td><input name="peso1" type="float"></td>
        <td><input name="valorKg" type="float"></td>
        <td><input name="observacoes" type="float"></td>
        </tr>
    </table>

        <input type="submit" value="Salvar">

    </form>
</body>
</html>