<?php

require_once "Conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["password"];

  $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

  $stmt = $conn->prepare($sql);
  $stmt->execute([
    "email" => $email,
    "senha" => $senha
  ]);

  $usuario = $stmt->fetch();

  if ($usuario && $usuario['email'] === $email) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: ../estoque.php");
    exit;
  }

  header("Location: ../index.php");
  exit;
}
