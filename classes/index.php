<?php

require 'functions.php';

class Task {

    // define visibiility, who ever is not part of this CLASS cannot access this PROPERTY
    protected $description;

    protected $completed = false;

    /*
     * Method, call it a method if defined in a CLASS.
     */
    public function __construct($desctiption)
    {
        // A CONSTRUCTOR will automatically triggered on instantiation.
        // setting a PROPERTY
        $this->description = $description;
    }
}

$task = new Task('Go to the store');
// an instance of a CLASS is in OBJECT. We can assign a PROPERTY to the current instance of the CLASS.
// arguments passed through here can be passed through the CONSTRUCTOR

$task->description;

require 'index.view.php';
