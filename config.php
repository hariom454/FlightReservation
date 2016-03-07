<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'st1');

try{
	$con = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	mysql_select_db(DB_DATABASE) or print(mysql_error());
}
catch (MySQLDuplicateKeyException $e) {
	// duplicate entry exception
	$e->getMessage();
}
catch (MySQLException $e) {
	// other mysql exception (not duplicate key entry)
	$e->getMessage();
}
catch (Exception $e) {
	// not a MySQL exception
	$e->getMessage();
}

?>