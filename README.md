# php-cru

CRUD feito em PHP + MySQL + JavaScript + HTML + CSS + Bootstrap com consumo à API do [ViaCEP](https://viacep.com.br/) para preenchimento automático do endereço.

## Requisitos:
  - PHP 7.4.20;
  - MySQL 5.6 ou superior;
  - Servidor PHP ([XAMPP](https://www.apachefriends.org/download.html)).
  - [Bootstrap](https://getbootstrap.com/)
  - [Font Awesome](https://fontawesome.com/)


## Configurações:

**Banco de Dados:**

Crie uma base de dados MySQL com o nome *bd_crud* e utilize o arquivo [script_banco.sql](https://github.com/henriquelvieira/php-crud/blob/main/script_banco.sql) para criar a tabela necessária.

**Conexão com o Banco de Dados:**

Para realizar a conexão com o banco de dados via PHP edite o arquivo [config.php](https://github.com/henriquelvieira/php-crud/blob/main/config.php).

    define('DB_NAME', 'bd_crud');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');

## Estrutura do Projeto

- /layout: Diretório contendo os arquivos de template (Header e Footer);
- /js: Arquivos JavaScript utilizados no projeto;
- /assets: Armazenamento de imagens e outros arquivos externos;
- /clientes: Arquivos utilizados no CRUD de Clientes;
- index.php: Página principal do projeto, utilizado para listagem dos clientes e chamada das opções disponíveis (Visualização / Cadastro / Edição e Remoção);
- database.php: Arquivo utilizado para realizar a conexão com o banco além de conter as funções genéricas de CRUD no banco;
- config.php: Configuração do projeto (conexão com banco e apontamento dos arquivos de template);
- clientes_functions.php: Funções utilizadas no CRUD de clientes.


## Imagens

**Tela de Listagem**
![Listagem](https://i.imgur.com/mnbWO60.png)

**Tela de Cadastro**
![Cadastro](https://i.imgur.com/cmJOtnh.png)

**Visualização dos dados do Cliente (Modal)**
![Listagem](https://i.imgur.com/5IWnbkr.png)

**Tela de Edição**
![Edição](https://i.imgur.com/XAwvb2b.png)

**Exclusão de Clientes**
![Exclusão](https://i.imgur.com/xJ2q3cT.png)