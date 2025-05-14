<?php include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $stmt = $conn->prepare("INSERT INTO clientes (nome, telefone) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $telefone);
    $stmt->execute();

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Cadastrar Cliente</h1>
    <form method="post">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control" required>
        </div>
        <button class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>