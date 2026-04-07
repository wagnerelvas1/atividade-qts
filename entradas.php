<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      <h2>Lista de Produtos</h2>
      <button class="btn-create" onclick="openModal()">Criar +</button>
    </div>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço Unitário</th>
            <th>Quantidade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Teclado Mecânico RGB</td>
            <td>Periféricos</td>
            <td>R$ 299,90</td>
            <td>15</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Mouse Gamer 16000DPI</td>
            <td>Periféricos</td>
            <td>R$ 159,90</td>
            <td>30</td>
          </tr>
          <tr>
            <td>003</td>
            <td>Monitor Ultralow 144Hz</td>
            <td>Monitores</td>
            <td>R$ 1250,00</td>
            <td>8</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal de Criação -->
  <div id="productModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h3>Cadastrar Novo Produto</h3>
      <form class="product-form">
        <div class="form-group">
          <label for="codigo">Código</label>
          <input type="text" id="codigo" name="codigo" required placeholder="Ex: 004">
        </div>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" required placeholder="Nome do produto">
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <input type="text" id="categoria" name="categoria" required placeholder="Categoria">
        </div>
        <div class="form-group">
          <label for="preco">Preço Unitário</label>
          <input type="text" id="preco" name="preco" required placeholder="R$ 0,00">
        </div>
        <div class="form-group">
          <label for="quantidade">Quantidade</label>
          <input type="number" id="quantidade" name="quantidade" required placeholder="0">
        </div>
        <button type="submit" class="btn-submit">Salvar Item</button>
      </form>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('productModal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('productModal').style.display = 'none';
    }

    // Fechar modal ao clicar fora 
    window.onclick = function(event) {
      if (event.target == document.getElementById('productModal')) {
        closeModal();
      }
    }
  </script>
</body>

</html>