<?php
define('MYSQL_USER', 'sr844');

define('MYSQL_PASSWORD', 'Hotshot1145');

define('MYSQL_HOST', 'sql2.njit.edu');

define('MYSQL_DATABASE', 'sr844');

$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $pdoOptions //Options
);
