# Canuto Barber - Sistema CRUD em PHP

Este é um sistema simples de gerenciamento de clientes para uma barbearia fictícia chamada **Canuto Barber**. O sistema foi desenvolvido utilizando PHP, MySQL e Bootstrap, com funcionalidades completas de **CRUD** (Create, Read, Update, Delete).

---

## 🚀 Como Rodar o Projeto Localmente (XAMPP - Windows)

### 1. Requisitos
- XAMPP instalado (com Apache e MySQL)
- Navegador web

### 2. Instalação

1. Extraia a pasta `canuto-barber` para dentro do diretório:
   ```
   C:\xampp\htdocs\
   ```

2. Inicie o **XAMPP** e ative os serviços:
   - Apache
   - MySQL

3. Acesse o **phpMyAdmin**:
   - [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

4. Crie o banco de dados:
   - Nome: `canuto_barber`

5. Execute o seguinte código SQL para criar a tabela `clientes`:
   ```sql
   CREATE TABLE clientes (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       telefone VARCHAR(20) NOT NULL
   );
   ```

6. Acesse o sistema no navegador:
   ```
   http://localhost/canuto-barber
   ```

---

## 🧾 Funcionalidades

- **Cadastrar Cliente**: formulário para adicionar novos clientes.
- **Listar Clientes**: visualização dos clientes cadastrados.
- **Editar Cliente**: atualizar nome e telefone de um cliente.
- **Excluir Cliente**: remover um cliente da base de dados.

---

## 📁 Estrutura do Projeto

```
canuto-barber/
├── conexao.php
├── index.php
├── cadastrar.php
├── editar.php
├── excluir.php
└── README.md
```

---

---

Feito com 💈 por Canuto Barber.
