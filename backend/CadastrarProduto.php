<?php

require_once "Conexao.php";

$cod = $_POST["codigo"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];

if (strlen($cod) != 4) {
  for ($i = strlen($cod); $i < 4; $i++) {
    $cod = "0" . $cod;
  }
}

$sql = "INSERT INTO produtos (cod, nome, fk_categoria, preco) VALUES (:codigo, :nome, :categoria, :preco)";

$stmt = $conn->prepare($sql);
$stmt->execute([
  "codigo" => $cod,
  "nome" => $nome,
  "categoria" => $categoria,
  "preco" => $preco
]);

header("Location: ../produtos.php");
