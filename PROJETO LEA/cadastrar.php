<?php
    include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? null;  // Verifique se 'nome' está definido
    $email = $_POST['email'] ?? null;  // Verifique se 'email' está definido
    $senha = $_POST['senha'] ?? null;  // Verifique se 'senha' está definido

    var_dump($nome, $email, $senha);

    if ($nome && $email && $senha) {
        $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
           header("location: inicio.html");
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
        }
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>