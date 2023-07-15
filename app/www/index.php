<?php

echo 'Project run under docker-compose: Nginx latest + php-fpm8.2 + MySQL8<br />';
echo 'PHP Version: ' . PHP_VERSION . '<br />';

$connection = new PDO('mysql:host=db;charset=utf8;dbname=mysql', 'root', 'root');
$connection->query('SELECT version();')->fetchColumn(0);

echo 'Mysql version: ' . $connection->query('SELECT version();')->fetchColumn(0);
