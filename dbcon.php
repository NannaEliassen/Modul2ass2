<?php
const DB_HOST = 'nannaeliassen.com.mysql';
const DB_USER = 'nannaeliassen_c';
const DB_PASS = 'idAxQuiq';
const DB_NAME = 'nannaeliassen_c';

$link = new mySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>
