<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
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
    <h2>Excluir Registro</h2>
    <div class="form">
    <form method="POST" action="deletar.php">
    <input type="number" name="id" placeholder="ID"><br>
        <input type="submit" value="Deletar encomenda">
    </form>
</div>
<center>
</body>
</html>

<?php
include 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];

    $sql = "DELETE FROM moveit WHERE id=$id";


    if (empty($id)) {
        echo "Erro: Todos os campos devem ser preenchidos.";
    } else if($conn->query($sql) === TRUE) {
        echo "Encomenda excluída com sucesso!";
    }
}
$conn->close();
?>
