<?php

//PARAMETRIZAÇÕES DO BANCO DE DADOS

//NOME DA BASE
define('DB_NAME', 'bd_crud');

//USUÁRIO
define('DB_USER', 'root');

//SENHA
define('DB_PASSWORD', '');

//ENDEREÇO
define('DB_HOST', 'localhost');

//CAMINHO ABSOLUTO DA PASTA DO SISTEMA
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
//CAMINHO DO SERVER
if ( !defined('BASEURL') )
	define('BASEURL', '/CRUD-Clientes/');
	
//CAMINHO DO ARQUIVO PARA CONEXÃO COM O BANCO DE ADOS
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database.php');

//CAMINHA DO TEMPLATE (HEADER E FOOTER)
define('HEADER_TEMPLATE', ABSPATH . 'layout/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'layout/footer.php');
?>