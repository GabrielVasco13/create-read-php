<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Home</a>
        <a class="navbar-brand" href="views/cadastro.html">Calcular</a>
        <a class="navbar-brand" href="consulta.php">Consultar</a>
    </nav>
</head>

<body>

    <?php 
    include_once("../../conexao.php");
    
    if ($_POST) {
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $media = ($nota1 + $nota2) / 2;
        $situacao = $media >= 6 ? "Aprovado" : "Reprovado";
        
        $sql = "INSERT INTO alunos(nome, nota1, nota2, media, situacao) VALUES ('$nome', $nota1, $nota2, $media, '$situacao')";
        if ($conexao->query($sql)) {
            echo "Aluno cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
        $conexao->close();
    }
    ?>

    <a class="btn btn-success" href="cadastro_view.html" role="button">Cadastrar</button></a>
    <a class="btn btn-primary" href="../../index.html" role="button">Home</button></a>
</body>

</html>