<div id="modalEntradas" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('modalEntradas')">&times;</span>
    <h3>Cadastrar Nova Entrada</h3>
    <form class="product-form" action="backend/CadastrarEntrada.php" method="POST">
      <div class="form-group">
        <label for="produto">Produto</label>
        <select id="produto" name="produto">
          <option value="" disabled hidden selected>Selecione um produto</option>
          <?php foreach ($produtos as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nome'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" placeholder="Max: 9999" required>
      </div>
      <div class="form-group">
        <label for="data">Data</label>
        <input type="date" id="data" name="data" placeholder="Data" required>
      </div>
      <button type="submit" class="btn-submit">Salvar</button>
    </form>
  </div>
</div>