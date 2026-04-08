<?php require_once "backend/Entradas.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entradas</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="dashboard-body">
  <?php
  $page = 'entradas';
  include 'components/navbar.php';
  ?>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h2>Entradas</h2>
      <button class="btn-create" onclick="openModal('modalEntradas')">Criar +</button>
    </div>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Cod</th>
            <th>Produto</th>
            <th>Qtd</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($entradas as $e): ?>
            <tr>
              <td><?= $e['cod'] ?></td>
              <td><?= $e['nome_produto'] ?></td>
              <td><?= $e['qtd'] ?></td>
              <td><?= date("d/m/Y", strtotime($e['data_entrada'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'components/modalEntradas.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>