<div id="modalProdutos" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('modalProdutos')">&times;</span>
    <h3>Cadastrar Novo Produto</h3>
    <form class="product-form" action="backend/CadastrarProduto.php" method="POST">
      <div class="form-group">
        <label for="codigo">Código</label>
        <input type="text" maxlength="4" id="codigo" name="codigo" placeholder="Ex: 0004" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Nome do produto" required>
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <select id="categoria" name="categoria">
          <option value="" disabled hidden selected>Selecione uma categoria</option>
          <?php foreach ($categorias as $c): ?>
            <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="preco">Preço Unitário</label>
        <input type="text" id="preco" name="preco" placeholder="R$ 0,00">
      </div>
      <button type="submit" class="btn-submit">Salvar</button>
    </form>
  </div>
</div>