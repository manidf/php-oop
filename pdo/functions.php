<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectDB()
{
    try {
        // PHP DATA OBJECT
    return new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', 'root');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// function accepts and intance of $pdo - database instance
function fetchAllTasks($pdo)
{
    // prepare SQL query
    $statement = $pdo->prepare('select * from todos');

    // execute the query
    $statement->execute();

    // dummy generic object
    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

    // fetch data and place in a named CLASS
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
