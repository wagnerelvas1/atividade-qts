<?php

$conn = new mysqli("my-mysql", "root", "banco123", "atividade");

if ($conn->connect_error) {
  die("Erro de conexão: " . $conn->connect_error);
} else {
  die("Conexão realizada com sucesso");
}
