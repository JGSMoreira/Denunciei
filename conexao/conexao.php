<?php
$HOST = 'localhost:3306';
$USER = 'root';
$PASSWORD = '';
$DATABASE = 'psinu';

$conn = new PDO('mysql:host='.$HOST.';dbname='.$DATABASE,$USER,$PASSWORD);
 ?>
