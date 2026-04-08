<nav class="navbar">
  <div class="navbar-wrapper">
    <div class="navbar-brand">
      <strong>Qualidade e Teste de Software</strong>
    </div>
    <ul class="navbar-nav">
      <li><a href="estoque.php" class="nav-link <?= $page == 'estoque' ? 'active' : '' ?>">Estoque</a></li>
      <li><a href="entradas.php" class="nav-link <?= $page == 'entradas' ? 'active' : '' ?>">Entradas</a></li>
      <li><a href="produtos.php" class="nav-link <?= $page == 'produtos' ? 'active' : '' ?>">Produtos</a></li>
      <li><a href="categorias.php" class="nav-link <?= $page == 'categorias' ? 'active' : '' ?>">Categorias</a></li>
    </ul>
    <div class="navbar-user dropdown">
      <a href="#" class="user-profile dropdown-toggle" title="Opções" onclick="toggleUserDropdown(event)">
        <!-- Novo Ícone de Usuário -->
        <span style="margin-right: 8px; font-weight: bold;"><?= $usuario ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="28" height="28">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </a>
      <div class="dropdown-menu" id="userDropdown">
        <a href="backend/Logout.php" class="dropdown-item logout-link">Sair</a>
      </div>
    </div>
  </div>
</nav>