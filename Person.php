<?php

class Person {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

}

$john = new Person('Manny Ferreira');
