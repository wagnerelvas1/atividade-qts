<?php

require_once "Conexao.php";

$produto = $_POST["produto"];
$qtd = $_POST["quantidade"];
$data = $_POST["data"];

$data_formatada = date("Ymd", strtotime($data));
$qtd_formatada = $qtd;
if (strlen($qtd_formatada) != 4) {
  for ($i = strlen($qtd_formatada); $i < 4; $i++) {
    $qtd_formatada = "0" . $qtd_formatada;
  }
}

$sql = "SELECT cod FROM produtos WHERE id = :produto";
$stmt = $conn->prepare($sql);
$stmt->execute([
  "produto" => $produto
]);
$produto_codigo = $stmt->fetchColumn();

$cod = $data_formatada . $qtd_formatada . $produto_codigo;

$sql = "INSERT INTO entradas (cod, fk_produto, qtd, data_entrada) VALUES (:cod, :produto, :qtd, :data_entrada)";
$stmt = $conn->prepare($sql);
$stmt->execute([
  "cod" => $cod,
  "produto" => $produto,
  "qtd" => $qtd,
  "data_entrada" => $data
]);

header("Location: ../entradas.php");
