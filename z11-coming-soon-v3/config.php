<?php

/** O nome do banco de dados*/
define('DB_NAME', 'u815934597_zonze');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u815934597_zonze');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'zonze11');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');
//define('DB_HOST', 'sql50.main-hosting.eu');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/public_html/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database.php');
?>