# 🐛 Projeto de Estoque Vulnerável - Qualidade e Teste de Software 🚨

Bem-vindo ao repositório do projeto da disciplina de **Qualidade e Teste de Software**! 

Este é um sistema de controle de estoque simples (com `Categorias`, `Produtos` e `Entradas`), mas com um **propósito especial**: ele foi construído para dar errado! 💥

O código contém diversas vulnerabilidades de segurança intencionais, falhas de lógica de negócio e ausência de validações (tanto no front-end quanto com o banco de dados). O objetivo primário deste repositório é servir como um "parque de diversões" para estudantes praticarem **Testes de Software e Segurança (QA / Pentest)**, localizando e catalogando pontos onde a aplicação simplesmente colapsa.

---

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP (Com falhas de validação de rotas e segurança na sessão)
- **Frontend:** HTML5, CSS3 (Modern UI / Dark Mode), Vanilla JavaScript
- **Banco de Dados:** Relacional (MySQL / MariaDB)

---

## 💣 Checklist de Vulnerabilidades e Erros 

Esta seção é dedicada ao registro de todas as anomalias, falhas de lógica (bugs) e vulnerabilidades de segurança contidas no projeto. 

*(Preencher gradativamente com as falhas encontradas durante os testes!)*

- [ ] ⚠️ *Insira o Erro 1 aqui...*
- [ ] ⚠️ *Insira o Erro 2 aqui...*
- [ ] ⚠️ *Insira o Erro 3 aqui...*
- [ ] ⚠️ *Insira o Erro 4 aqui...*
- [ ] ⚠️ *Insira a falha de lógica de negócio aqui...*
- [ ] ⚠️ *Insira o problema da falta de `required` nos formulários aqui...*
- [ ] ⚠️ *Insira o erro gerado na sessão de usuário destravada aqui...*

---

## 🚀 Como Executar Localmente

1. Suba um servidor web (XAMPP, WAMP, ou container Docker) com suporte a **PHP** e **MySQL**.
2. Restaure o dump do seu banco de dados no MySQL.
3. Importe o conteúdo do repositório para a pasta pública (ex: `htdocs` ou `www`).
4. Configure as credenciais no arquivo `backend/Conexao.php` ou nas variáveis adequadas.
5. Acesse a aplicação e comece a testar / quebrar o sistema! 🔨

> **Aviso Importante:** 🛑 **NÃO** hospede este projeto em qualquer ambiente de produção online ou servidor aberto ao público! Ele é repleto de brechas exclusivas para aprendizado puramente acadêmico.
