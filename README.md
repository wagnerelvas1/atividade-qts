# 🐛 Trabalho Prático - Qualidade e Teste de Software 🚨

**Análise de Qualidade e Segurança de Software**

Este projeto foi desenvolvido como trabalho acadêmico (Atividade Avaliativa) para a disciplina de **Qualidade e Teste de Software** do curso de **Análise e Desenvolvimento de Sistemas (5º período - ADS)**, sob orientação da professora **Caroline Carvalho Nogueira**.

Este repositório contém a entrega de um sistema de controle de estoque simples (com `Categorias`, `Produtos` e `Entradas`) concebido propositalmente com brechas! 💥 O objetivo do trabalho é testar, identificar e documentar problemas de segurança, furos na lógica de negócios e falta de validações (tanto no front-end quanto no banco de dados).

---

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP 
- **Frontend:** HTML5, CSS3 (Modern UI / Dark Mode), Vanilla JavaScript
- **Banco de Dados:** MySQL / MariaDB



## 🚀 Como Executar o Projeto

O projeto não requer frameworks pesados e pode ser facilmente executado utilizando qualquer ambiente que possua servidor web com **PHP e Apache** (como XAMPP, Laragon, WAMP ou Docker).

Siga os passos abaixo:

### Passo 1: Preparando o Banco de Dados 🗄️
Localize na raiz do projeto a pasta `setup/`. Dentro dela, execute as instruções do arquivo `banco.sql` no seu servidor MySQL ou MariaDB para construir as tabelas e a estrutura exigida pela aplicação.

### Passo 2: Configurando o Servidor Web 🌐
- Você pode rodar de forma nativa movendo os arquivos do repósitorio para a pasta pública do seu servidor (normalmente `htdocs` no **XAMPP** ou `www` no **Laragon**).
- **Alternativa Docker (Recomendado):** Na pasta `setup/`, disponibilizamos um `Dockerfile` e as instruções para que o projeto rode facilmente isolado numa máquina conteinerizada!

### Passo 3: Configuração das Credenciais (Importante) 🔑
Na raiz do código existe um arquivo de modelo de ambiente chamado: 
`vars.example.php`.

Duplique (ou renomeie) este arquivo para **`vars.php`**. 
Abra o novo `vars.php` gerado e preencha com as suas próprias credenciais locais (Nome do banco, usuário, e-mail de root e etc) para que a aplicação consiga se comunicar com o banco de dados que você importou na etapa um.

Feito isso, abra `http://localhost/` (ou a porta customizada que configurou) em seu navegador para explorar e descobrir todos os problemas escondidos! 🔨
