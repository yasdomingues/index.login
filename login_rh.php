<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $funcao = $_POST['funcao'];
    $salario = $_POST['salario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    include "conexao_rh.php";

    $sql = "SELECT * FROM funcionarios
            WHERE usuario = '$usuario'
            AND senha = '$senha'";

    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "liberado!";
        header('location: inicio_rh.html');
    } else {
        echo "usuario ou senha invalidos!";
        echo "<a href='index.html'>voltar</a>";
    }
}