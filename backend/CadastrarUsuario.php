<?php

require_once "Conexao.php";

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
