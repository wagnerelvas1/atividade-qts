<?php

require_once "Conexao.php";
require_once "GetUsername.php";

$sql = "SELECT id, nome FROM categorias ORDER BY nome";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll();

$sql = "
  SELECT 
    p.cod, 
    p.nome, 
    c.nome as categoria, 
    p.preco 
  FROM produtos AS p
  INNER JOIN categorias AS c ON p.fk_categoria = c.id
  ORDER BY p.id
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();
