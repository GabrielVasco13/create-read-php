# Guia de Inicialização e Teste do Projeto

## Pré-requisitos
1. Certifique-se de ter o **PHP**, **MySQL** e o **phpMyAdmin** instalados no seu sistema.
2. Abra o navegador e acesse o **phpMyAdmin** em `http://localhost/phpmyadmin`.

## Passos para Inicializar o Projeto

1. **Acesse o phpMyAdmin**:
   - No painel esquerdo, clique em **Novo** para criar um novo banco de dados.

2. **Criar o Banco de Dados**:
   - No campo **Nome do Banco de Dados**, digite `crud`.
   - Selecione o collation `utf8_general_ci` para garantir compatibilidade de caracteres.
   - Clique em **Criar**.

3. **Criar a Tabela Alunos**:
   - Com o banco de dados `crud` selecionado, vá até a aba **SQL** e execute o seguinte código para criar a tabela `alunos`:

     ```sql
     CREATE TABLE alunos (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       idade INT NOT NULL,
       email VARCHAR(100) NOT NULL
     );
     ```

## Configuração de Conexão ao Banco de Dados

Verifique que o arquivo de configuração da conexão com o banco de dados no seu projeto (geralmente `config.php` ou `db.php`) está com as credenciais corretas, como por exemplo:

```php
<?php
$host = 'localhost';
$db = 'crud';
$user = 'seu_usuario';
$pass = 'sua_senha';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
?>
