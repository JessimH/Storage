<?php

session_start();

// public/index.php
require __DIR__ . '/../vendor/autoload.php';

// DATABASE (MYSQL)
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=items', 'root', 'JessimMysql1@');
} catch (PDOException $e) {
    die($e->getMessage());
}

// SESSION
// $store = new App\Storage\SessionStorage;
// $store->set('name', 'Jessim');
// $store->set('age', 22);
// $store->set('email', 'jessim.h1@hotmail.fr');
// $store->set('job', 'développeur');
// $store->set('couleur', 'noir');
// echo $store->get('name');
// $store->delete('age');
// $store->destroy();
// print_r($store->all());


// FILES
// $store = new App\Storage\FileStorage;
// $store->set('name', 'Jessim');
// $store->set('age', 22);
// $store->set('email', 'jessim.h1@hotmail.fr');
// $store->set('job', 'développeur');
// $store->set('couleur', 'noir');
// $store->delete('age');
// $store->destroy();
// print_r($store->all());


//MYSQL
// $store = new App\Storage\DatabaseStorage($db);
// $store->set('name', 'Jessim');
// $store->set('age', 22);
// $store->set('email', 'jessim.h1@hotmail.fr');
// $store->set('job', 'développeur');
// $store->set('couleur', 'noir');
// $name = $store->get('name');
// echo $name['value'];
// $store->delete('age');
// $store->destroy();
// print_r($store->all());