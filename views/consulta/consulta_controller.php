<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar notas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Home</a>
        <a class="navbar-brand" href="views/cadastro.html">Calcular</a>
        <a class="navbar-brand" href="consulta_controller.php">Consultar</a>
    </nav>
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">1º Nota</th>
                <th scope="col">2º Nota</th>
                <th scope="col">Media</th>
                <th scope="col">Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once("../../conexao.php");
                
                $comando_sql = mysqli_query($conexao, "SELECT * FROM alunos") or die(
                    mysqli_error($conexao));
                while($row = mysqli_fetch_assoc($comando_sql)) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['nota1'] . "</td>";
                    echo "<td>" . $row['nota2'] . "</td>";
                    echo "<td>" . $row['media'] . "</td>";
                    echo "<td>" . $row['situacao'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</html>