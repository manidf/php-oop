<?php

try {
    // PHP DATA OBJECT
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', 'root');
} catch (PDOException $e) {
    die($e->getMessage());
}

// prepare SQL query
$statement = $pdo->prepare('select * from todos');

// execute the query
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($tasks);
// var_dump($tasks[0]->description);

require 'index.view.php';
