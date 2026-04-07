<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Senha</title>
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

    <?php
    // Lógica para enviar o link de senha viria aqui no futuro
    ?>
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h1>Recuperar Senha</h1>
      <p>Digite seu e-mail para receber as instruções de recuperação.</p>
    </div>

    <form action="" method="POST">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <button type="submit" class="btn-submit">Enviar Link de Recuperação</button>
    </form>

    <div class="footer-links">
      <a href="index.php">Voltar ao Login</a>
    </div>
  </div>

</body>

</html>