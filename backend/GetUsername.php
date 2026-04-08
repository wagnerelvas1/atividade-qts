<?php

session_start();

$usuario = $_SESSION['usuario']['nome'];
$usuario = explode(" ", $usuario);
$usuario = $usuario[0];
