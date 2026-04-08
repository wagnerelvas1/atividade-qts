<?php require_once "backend/Produtos.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="dashboard-body">
  <?php
  $page = 'produtos';
  include 'components/navbar.php';
  ?>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h2>Produtos</h2>
      <button class="btn-create" onclick="openModal('modalProdutos')">Criar +</button>
    </div>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço Unitário</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($produtos as $p): ?>
            <tr>
              <td><?= $p['cod'] ?></td>
              <td><?= $p['nome'] ?></td>
              <td><?= $p['categoria'] ?></td>
              <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'components/modalProdutos.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>