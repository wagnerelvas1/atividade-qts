<?php

require_once "Conexao.php";
require_once "GetUsername.php";

$sql = "SELECT id, nome FROM categorias";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll();
