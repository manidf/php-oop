
<?php

class Task
{
    public $description;
    public $title;

    public $completed = false;

    // method on an object
    public function __construct($description, $title)
    {
        $this->description = $description; // assign value to the 'description' property
        $this->title = $title;
    }

    // public method to expose completed property
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'This is the title');

$task->complete();

var_dump($task->description);
var_dump($task->title);
