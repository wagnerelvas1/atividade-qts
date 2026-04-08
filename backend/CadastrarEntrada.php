<?php

require_once "Conexao.php";

$produto = $_POST["produto"];
$qtd = $_POST["quantidade"];
$data = $_POST["data"];

$data_formatada = date("Ymd", strtotime($data));
$cod = $data_formatada . $qtd . $produto;

$sql = "INSERT INTO entradas (cod, fk_produto, qtd, data_entrada) VALUES (:cod, :produto, :qtd, :data_entrada)";
$stmt = $conn->prepare($sql);
$stmt->execute([
  "cod" => $cod,
  "produto" => $produto,
  "qtd" => $qtd,
  "data_entrada" => $data
]);

header("Location: ../entradas.php");
