<?php
// define('PROJ_ROOT', '/myProject/peh-suann');
// define('PROJ_ROOT', '/peh-suann.github.io');
define('PROJ_ROOT', '/PHP/peh-suann.github.io-main');

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '0921218220';
$db_name = 'peh-suann-lai';

// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = '';
// $db_name = 'mountain';

// $db_host = '192.168.21.84';
// $db_user = 'mountain';
// $db_pass = 'mountaindude55';
// $db_name = 'mountain';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
