<?php

require_once "Conexao.php";
require_once "GetUsername.php";

$sql = "
  SELECT 
    p.id,
    p.cod, 
    p.nome, 
    p.preco,
    COALESCE(SUM(e.qtd), 0) as qtd_estoque,
    COALESCE(SUM(e.qtd * p.preco), 0) as valor_total
  FROM produtos p
  LEFT JOIN entradas e ON p.id = e.fk_produto
  GROUP BY p.id
  ORDER BY qtd_estoque DESC, p.nome ASC
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();
