<?php
include('/db.php');
define('db_name','test');
define('DB_USER','root');
define('db_host','localhost');
define('DB_PASS','');
$main_connection= new db;
$main_connection->connection();
?>