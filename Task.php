
<?php

class Task {
	public $description;
	public $title;

	public $completed = false;

	// method
	public function __construct($description, $title)
	{
		$this->description = $description; // assign value to the 'description' property
		$this->title = $title;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Learn OOP', 'This is the title');

$task->complete();

var_dump($task->completed);
