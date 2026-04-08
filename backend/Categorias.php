<?php

require_once "Conexao.php";

$sql = "SELECT id, nome FROM categorias";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll();

session_start();
$usuario = $_SESSION['usuario']['nome'];
$usuario = explode(" ", $usuario);
$usuario = $usuario[0];
