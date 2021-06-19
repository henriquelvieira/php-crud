# php-cru
CRUD feito em PHP + MySQL + JavaScript + HTML + CSS + Bootstrap com consumo à API do [ViaCEP](https://viacep.com.br/) para preenchimento automatico do endereço.

## Requisitos
  - PHP 7.4.20;
  - MySQL 5.6 ou superior;
  - Servidor PHP ([XAMPP](https://www.apachefriends.org/download.html)).


## Configuração

**Banco de Dados**
Crie uma base de dados MySQL com o nome *bd_crud* e utilize o arquivo [script_banco.sql](https://github.com/henriquelvieira/php-crud/blob/main/script_banco.sql) para criar a tabela necessária.

**Conexão com o Banco de Dados**
Para realizar a conexão com o banco de dados via PHP edite o arquivo [config.php](https://github.com/henriquelvieira/php-crud/blob/main/config.php).

    define('DB_NAME', 'bd_crud');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');


## Imagens
![Listagem](https://imgur.com/mnbWO60)
