<!DOCTYPE html>
<html>
<head>
    <title>Encomendas existentes</title>
    <link rel="stylesheet" type="text/css" href="../style/cabecalho.css">
</head>
<body>
<div class="cabecalho">
        <header>
            <img src="../assets/logolaranja.png" width="15%">
            <br>
            <br>
            <a href="../bancodedados/criar.php" class="botao">Criar</a>
            <a href="../bancodedados/ler.php" class="botao">Ler</a>
            <a href="../bancodedados/atualizar.php" class="botao">Atualizar</a>
            <a href="../bancodedados/deletar.php" class="botao">Deletar</a>
            <a href="../system/enter.php" class="botao">Sair</a>
        </header>
    </div>
    <center>
    <h2>Encomendas existentes</h2>
</center>
    <hr>
</body>
</html>


<?php
include 'user.php';

$sql = "SELECT * FROM moveit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Código de Rastreio: " . $row['codigo'] . "<br>";
        echo "Declaração: " . $row['declaracao'] . "<br>";
        echo "CPF Declarado: " . $row['cpf'] . "<br>";
        echo "Data: " . $row['data'] . "<hr>";
    }
} else {
    echo "Nenhuma encomenda encontrada.";
}

$conn->close();
?>
