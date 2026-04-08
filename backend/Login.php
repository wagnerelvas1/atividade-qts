<?php

require_once "Conexao.php";

$email = $_POST["email"];
$senha = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE email = :email";

$stmt = $conn->prepare($sql);
$stmt->execute([
  "email" => $email
]);

$usuario = $stmt->fetch();

if ($usuario && $usuario['email'] === $email && $usuario['senha'] === $senha) {
  session_start();
  $_SESSION["usuario"] = $usuario;
  header("Location: ../estoque.php");
  exit;
}
