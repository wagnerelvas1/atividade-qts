<?php

require_once "Conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["password"];

  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";

  $stmt = $conn->prepare($sql);
  $stmt->execute([
    "nome" => $nome,
    "email" => $email,
    "senha" => $senha
  ]);

  header("Location: ../index.php");
}
