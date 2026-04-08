<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  header("Location: index.php");
  exit;
}

$usuario = $_SESSION['usuario']['nome'];
$usuario = explode(" ", $usuario);
$usuario = $usuario[0];
