<div id="modalCategorias" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('modalCategorias')">&times;</span>
    <h3>Cadastrar Nova Categoria</h3>
    <form class="product-form" action="backend/CadastrarCategoria.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required placeholder="Ex: Eletrônicos">
      </div>
      <button type="submit" class="btn-submit">Salvar</button>
    </form>
  </div>
</div>