<?php

require 'functions.php';

class Task {

    // define visibiility, who ever is not part of this CLASS cannot access this PROPERTY
    public $description;

    public $completed = false;

    /*
     * Method, call it a method if defined in a CLASS.
     */
    public function __construct($description)
    {
        // A CONSTRUCTOR will automatically triggered on instantiation.
        // setting a PROPERTY
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'), // 0
    new Task('Finish work'), // 1
    new Task('Clean house'), // 2
];

$tasks[0]->complete();

// $task = new Task('Go to the store');
// an instance of a CLASS is in OBJECT. We can assign a PROPERTY to the current instance of the CLASS.
// arguments passed through here can be passed through the CONSTRUCTOR

// $task->complete();
// dd($task->isComplete());
// dd($tasks)

// load a view
require 'index.view.php';
