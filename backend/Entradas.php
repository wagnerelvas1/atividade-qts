<?php

require_once "Conexao.php";

$sql = "SELECT id, nome FROM produtos ORDER BY nome";
$stmt = $conn->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();

$sql = "
  SELECT 
    e.cod, 
    p.nome as nome_produto, 
    e.qtd, 
    e.data_entrada 
  FROM entradas e 
  INNER JOIN produtos p ON e.fk_produto = p.id
  ORDER BY e.data_entrada DESC, p.nome ASC
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$entradas = $stmt->fetchAll();
