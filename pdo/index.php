<?php

require 'functions.php';
require 'Task.php';

$pdo = connectDB();

$tasks = fetchAllTasks($pdo);

// var_dump($tasks);
// var_dump($tasks[0]->description);

require 'index.view.php';
