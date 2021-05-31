<?php
    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    
    $pdo = Conexao::getInstance();

    $stmt = $pdo->prepare('INSERT INTO informacoes(nomFaz, sexo, idade, NumeroBrinco, valorKg, peso1, observacoes) 
     VALUES(:nomFaz,  :sexo,  :idade,  :NumeroBrinco,  :valorKg, :peso1, :observacoes)');
    $stmt->bindParam(':nomFaz', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $sexo, PDO::PARAM_INT);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':NumeroBrinco', $NumeroBrinco, PDO::PARAM_STR);
    $stmt->bindParam(':valorKg', $valorKg, PDO::PARAM_STR);
    $stmt->bindParam(':peso1', $peso, PDO::PARAM_STR);
    $stmt->bindParam(':observacoes', $observacoes, PDO::PARAM_STR);
    $nome = $_POST['nomFaz'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $NumeroBrinco = $_POST['NumeroBrinco'];
    $valorKg = $_POST['valorKg'];
    $peso = $_POST['peso1'];
    $observacoes = $_POST['observacoes'];
    $stmt->execute();

    header("location:index.php");

?>
