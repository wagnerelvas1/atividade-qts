<?php

require_once "Conexao.php";

$nome = $_POST["nome"];

$sql = "INSERT INTO categorias (nome) VALUES (:nome)";

$stmt = $conn->prepare($sql);
$stmt->execute([
  "nome" => $nome
]);

header("Location: ../categorias.php");
