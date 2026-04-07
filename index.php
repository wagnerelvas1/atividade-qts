<?php require_once "backend/conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-color: #0f172a;
      --card-bg: rgba(30, 41, 59, 0.7);
      --text-color: #f8fafc;
      --input-bg: rgba(15, 23, 42, 0.6);
      --input-border: #334155;
      --primary-color: #3b82f6;
      --primary-hover: #2563eb;
      --border-radius: 12px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
      color: var(--text-color);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .login-container {
      background: var(--card-bg);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: var(--border-radius);
      padding: 2.5rem 2rem;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.6);
    }

    .login-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .login-header h1 {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #fff;
    }

    .login-header p {
      font-size: 0.9rem;
      color: #94a3b8;
      font-weight: 300;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-size: 0.875rem;
      font-weight: 400;
      color: #cbd5e1;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem 1rem;
      background-color: var(--input-bg);
      border: 1px solid var(--input-border);
      border-radius: 8px;
      color: #fff;
      font-family: inherit;
      font-size: 1rem;
      outline: none;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .form-group input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
    }

    .form-group input::placeholder {
      color: #64748b;
    }

    .btn-submit {
      width: 100%;
      padding: 0.875rem;
      background-color: var(--primary-color);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .btn-submit:hover {
      background-color: var(--primary-hover);
    }

    .btn-submit:active {
      transform: scale(0.98);
    }

    .footer-links {
      margin-top: 1.5rem;
      text-align: center;
      font-size: 0.875rem;
    }

    .footer-links a {
      color: #94a3b8;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .footer-links a:hover {
      color: #fff;
      text-decoration: underline;
    }

    .password-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .password-wrapper input {
      padding-right: 2.5rem;
    }

    .toggle-password {
      position: absolute;
      right: 0.75rem;
      background: none;
      border: none;
      color: #94a3b8;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      transition: color 0.2s ease;
    }

    .toggle-password:hover {
      color: #cbd5e1;
    }

    .toggle-password:focus {
      outline: none;
    }

    /* Adicionando algo mínimo de PHP apenas para manter o arquivo .php justificado */
    <?php
    // Lógica de autenticação viria aqui futuramente
    ?>
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h1>Login</h1>
      <p>Por favor, insira suas credenciais para entrar.</p>
    </div>

    <form action="" method="POST">
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

      <button type="submit" class="btn-submit">Entrar</button>
    </form>

    <div class="footer-links">
      <a href="recuperar_senha.php">Esqueceu a senha?</a>
    </div>
  </div>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      if (type === 'text') {
        this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
        this.setAttribute('aria-label', 'Ocultar senha');
      } else {
        this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
        this.setAttribute('aria-label', 'Mostrar senha');
      }
    });
  </script>
</body>

</html>