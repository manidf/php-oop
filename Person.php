<?php

class Person {

	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

	// SETTER
	public function setAge($age)
	{
		if ($age < 18)
		{
			throw new Exception("You are not old enought to pass through", 1);
		}
		$this->age = $age;
	}
}

$mannuel = new Person('Manny Ferreira');
$mannuel->setAge(33);

var_dump($mannuel);
