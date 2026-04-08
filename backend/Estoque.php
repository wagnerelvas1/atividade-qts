<?php

require_once "Conexao.php";

$sql = "
  SELECT 
    p.id,
    p.cod, 
    p.nome, 
    p.preco,
    SUM(e.qtd) as qtd_estoque,
    SUM(e.qtd * p.preco) as valor_total
  FROM produtos p
  LEFT JOIN entradas e ON p.id = e.fk_produto
  GROUP BY p.id
  ORDER BY qtd_estoque DESC, p.nome ASC
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();
