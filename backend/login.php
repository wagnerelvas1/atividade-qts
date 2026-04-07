<?php

require_once "conexao.php";

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
  print_r($usuario['email']);
  die();

  if ($usuario && $usuario['email'] === $email) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: ../dashboard.php");
  }

  header("Location: ../index.php");
}
