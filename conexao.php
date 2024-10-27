<?php 
$localhost = "localhost";
$usuario = "root";
$senha = "";
$db = "crud";
$conexao = new mysqli($localhost, $usuario, $senha, $db);

if( $conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} else {
    // echo "conectado";
}


?>