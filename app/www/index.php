<?php

    error_reporting(E_ALL);
    ini_set("display_errors", "on");
    
    echo "<h1>Docker-compose: Nginx + php-fpm7.1 + MySQL8 test App</h1>";
    
    //host = db, see docker-compose.yml
    $pdo = new PDO("mysql:host=db;charset=utf8;dbname=mysql", "root", "root");
    $users = $pdo->query("SELECT * FROM user")->fetchAll();
    
    echo "<pre>";
    print_r($users);
    echo "</pre>";