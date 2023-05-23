<!DOCTYPE html>
<html>
<head>
    <title>Atualizar</title>
    <link rel="stylesheet" type="text/css" href="../style/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="../style/form.css">
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
    <h2>Atualizar encomenda</h2>
    <div class="form">
    <form method="POST" action="atualizar.php">
        <input type="number" name="id" placeholder="ID"><br><br>
        <input type="text" name="codigo" placeholder="Código de Rastreio"><br><br>
        <input type="text" name="declaracao" placeholder="Declaração"><br><br>
        <input type="varchar" name="cpf" placeholder="CPF Declarado"><br><br>
        <input type="date" name="data" placeholder="Data"><br><br>
        <input type="submit" value="Atualizar">
    </form>
</div>
</center>
</body>
</html>

<?php
include 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $declaracao = $_POST['declaracao'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];

    $sql = "UPDATE moveit SET codigo='$codigo', declaracao='$declaracao', cpf='$cpf', data='$data'  WHERE id=$id";

    if (empty($codigo) || empty($declaracao) || empty($cpf) || empty($data)) {
        echo "Erro: Todos os campos devem ser preenchidos.";
    } else if($conn->query($sql) === TRUE) {
        echo "Encomenda atualizada com sucesso!" . $conn->error;
    }
}

$conn->close();
?>


