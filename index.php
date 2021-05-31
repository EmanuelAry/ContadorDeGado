<!DOCTYPE html>
<?php 
     include_once "conf/default.inc.php";
     require_once "conf/Conexao.php";
     $title = "Lista de Gados";
     $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "2";
     $procurar = isset($_POST['procurar']) ? $_POST['procurar'] : "";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>
</br></br>
<a href="marca.php">Inserir Gado</a>
</br></br>
<form method="post">
    <input type="radio" name="tipo" id="tipo" value="1" <?php if ($tipo == 1) { echo "checked"; }?>>Código<br>  
    <input type="radio" name="tipo" id="tipo" value="2" <?php if ($tipo == 2) { echo "checked"; }?>>Nome Fazendeiro<br>
    <input type="radio" name="tipo" id="tipo" value="3" <?php if ($tipo == 3) { echo "checked"; }?>>Número do Brinco<br>
    <input type="text" name="procurar" id="procurar" value="<?php echo $procurar; ?>">
    <input type="submit" value="Consultar">
</form>
<br>
<?php
    $sql = "";
    if ($tipo == 1){
        $sql = "SELECT * FROM informacoes WHERE id = $procurar ORDER BY id";
    }else if ($tipo == 1){    
        $sql = "SELECT * FROM informacoes WHERE nomFaz LIKE '$procurar%' ORDER BY nomFaz";
    }else{    
        $sql = "SELECT * FROM informacoes WHERE NumeroBrinco LIKE '$procurar%' ORDER BY NumeroBrinco";
    }
    $pdo = Conexao::getInstance();
    $consulta = $pdo->query($sql); 
    
    echo "<table border = 1px>
    <th>Código</th>
    <th>Nome Fazendeiro</th>
    <th>Numero do Brinco</th>
    <th>Idade</th>
    <th>Peso</th>
    <th>Sexo</th>
    <th>Valor</th>
    <th>Observações</th>";
    while ($linha = $consulta->fetch(PDO::FETCH_BOTH)){ 
        if ($linha['sexo']=="1"){
            $sexo = "Macho";
        } else{
            $sexo = "Fêmea";
        }
        echo "
        <tr><td>{$linha['id']}</td>
        <td>{$linha['nomFaz']}</td>
        <td>{$linha['NumeroBrinco']}</td>
        <td>{$linha['idade']}</td>
        <td>{$linha['peso1']}</td>
        <td>$sexo</td>
        <td>{$linha['valorKg']}</td>
        <td>{$linha['observacoes']}</td>
        </tr>";
        
    }
    echo "</table>"
?>

</body>
</html>