
    <!DOCTYPE html>
    <html>
    <head>
        <title>Registrar</title>
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
        <h2>Registrar encomenda:</h2>
    <div class="form">
        <form method="POST" action="criar.php">
            <input type="text" name="codigo" placeholder="Código de Rastreio"><br>
            <input type="text" name="declaracao" placeholder="Declaração"><br>
            <input type="varchar" name="cpf" placeholder="CPF Declarado"><br>
            <input type="date" name="data" placeholder="Data"><br>
            <input type="submit" value="Registrar">
        </form>
    </div>    
    </center>
    </body>
    </html>

    <?php
    include "user.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $codigo = $_POST['codigo'];
        $declaracao = $_POST['declaracao'];
        $cpf = $_POST['cpf'];
        $data = $_POST['data'];
    
        $sql = "INSERT INTO moveit (codigo, declaracao, cpf, data) VALUES ('$codigo', '$declaracao', '$cpf', '$data')";
    

        if (empty($codigo) || empty($declaracao) || empty($cpf) || empty($data)) {
            echo "Erro: Todos os campos devem ser preenchidos.";
        } else if($conn->query($sql) === TRUE) {
            echo "Encomenda registrada com sucesso!" . $conn->error;
        }
    }
    
    $conn->close();
    ?>
    