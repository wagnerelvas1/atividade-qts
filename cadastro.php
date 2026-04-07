<?php require_once "backend/conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h1>Criar Conta</h1>
      <p>Preencha os dados abaixo para se cadastrar.</p>
    </div>

    <form action="backend/cadastrar.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <div class="form-group">
        <label for="password">Senha</label>
        <div class="password-wrapper">
          <input type="password" id="password" name="password" placeholder="••••••••" required>
          <button type="button" id="togglePassword" class="toggle-password" aria-label="Mostrar senha">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </button>
        </div>
      </div>

      <div class="form-group">
        <label for="confirm_password">Confirmar Senha</label>
        <div class="password-wrapper">
          <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" required>
          <button type="button" id="toggleConfirmPassword" class="toggle-password" aria-label="Mostrar senha">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </button>
        </div>
      </div>

      <button type="submit" class="btn-submit">Cadastrar</button>
    </form>

    <div class="footer-links">
      <a href="index.php">Já tem uma conta? Faça login</a>
    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>