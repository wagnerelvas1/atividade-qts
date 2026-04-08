<?php require_once "backend/Categorias.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categorias</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="dashboard-body">
  <?php
  $page = 'categorias';
  include 'components/navbar.php';
  ?>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h2>Categorias</h2>
      <button class="btn-create" onclick="openModal('modalCategorias')">Criar +</button>
    </div>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($categorias as $c): ?>
            <tr>
              <td><?= $c['id'] ?></td>
              <td><?= $c['nome'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'components/modalCategorias.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>