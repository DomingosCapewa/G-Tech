
# G-TECH – Plataforma de Gestão de Hospedagem na Nuvem

![G-TECH Logo](https://dummyimage.com/600x200/000/fff&text=G-TECH)

## Descrição

[**G-TECH**](https://gtech.wuaze.com/G-tech/index.php) é uma aplicação web desenvolvida em **PHP** com **MySQL**, que simula uma plataforma completa de **gestão de planos de hospedagem na nuvem**.  
O sistema permite que usuários escolham e assinem planos, façam pagamentos e gerenciem sua conta. Além disso, possui um painel administrativo para gestão de usuários, planos e assinaturas.

## Funcionalidades

### Usuário
* Cadastro e login seguro com hash de senha.  
* Escolha e assinatura de planos de hospedagem.  
* Processamento de pagamento com métodos variados (Cartão e PIX).  
* Cancelamento de assinatura.  
 * Painel do usuário com informações sobre plano ativo e histórico.

### Administrador
✅ Painel administrativo com controle total:  
- Cadastro, edição e exclusão de planos.  
- Visualização de métricas e últimos pagamentos.  
- Gestão de usuários.

## Tecnologias utilizadas

- **Backend:** PHP 7.4+ com PDO.
- **Banco de Dados:** MySQL.
- **Frontend:** HTML5, CSS3, Bootstrap 5.
- **JavaScript:** interatividade com campos dinâmicos e modais.
- **Ícones:** FontAwesome, Bootstrap Icons.

## Diferenciais técnicos

-  **Prepared Statements** com PDO para proteção contra SQL Injection.  
-  **Validação de senhas** com `password_hash()` e `password_verify()`.  
-  **Transações** (`beginTransaction` / `commit`) para garantir integridade no pagamento.  
- **Campos dinâmicos** com JavaScript para melhorar UX em formulários.  
-  Sistema modular com includes de cabeçalho, rodapé e config.

## Pré-requisitos

- PHP 7.4 ou superior  
- MySQL 5.7 ou superior  
- Servidor Apache ou NGINX  
- Composer (opcional)

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seuusuario/g-tech.git g-tech
   cd g-tech
2. Configure o banco de dados:
   - Crie um banco `gtech`.
   - Importe o arquivo `BANCO_DE_DADOS.sql` (disponível na pasta `G-TECH`).

3. Configure o `config.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'hospedagem');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```

4. Suba o servidor local:
   ```bash
   php -S localhost:8000
   ```

5. Acesse:  
   `http://localhost:8000`

## Estrutura do Banco de Dados

- **usuarios** → dados pessoais e senha (hash).  
- **planos** → nome, preço, armazenamento, banda, sites, e-mails.  
- **assinaturas** → status, datas de início/vencimento, usuário vinculado.  
- **pagamentos** → assinatura vinculada, valor, método, status e data.

## Fluxo principal do usuário

1. Cadastro.  
2. Login.  
3. Escolha de um plano.  
4. Pagamento via Cartão ou PIX.  
5. Ativação automática da assinatura.  
6. Gerenciamento no painel do usuário.

## Como contribuir

1. Fork este repositório.  
2. Crie uma branch: `git checkout -b minha-feature`.  
3. Commit suas alterações: `git commit -m 'Minha feature'`.  
4. Push: `git push origin minha-feature`.  
5. Abra um **Pull Request**.

## Licença

Este projeto está sob a licença **MIT**.  
Sinta-se à vontade para usar, estudar e modificar!

## Autor

- **Domingos**  
Desenvolvedor Full Stack, entusiasta de segurança e boas práticas.  
[LinkedIn](https://linkedin.com/domingoscapewa) | [GitHub](https://github.com/domingosCapewa)

## Screenshots

<div align="center">
  <img src="https://github.com/user-attachments/assets/e3006ce6-63f6-4c6f-aaaa-f173952cd84d" width="250" alt="Tela index.php">
  <img src="https://github.com/user-attachments/assets/93323b5a-b6b5-479f-83aa-1917cbe8e0f6" width="250" alt="Tela de Planos">
  <img src="https://github.com/user-attachments/assets/c144655a-3700-4158-9de6-a400c7821259" width="250" alt="Tela com modal">
</div>

<br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/cf9da8a2-f1aa-435b-8ad4-527be4a86c0b" width="250" alt="Painel administrativo">
  <img src="https://github.com/user-attachments/assets/a50a67c2-f6a8-4e4f-b31b-d836bdb41caa" width="250" alt="Painel do usuário">
</div>




## Notas finais

* Projeto desenvolvido como parte da disciplina **Desenvolvimento Backend**.  
* Foco em boas práticas de segurança, modularidade e experiência do usuário.
