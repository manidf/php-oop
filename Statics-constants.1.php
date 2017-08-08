<?php

class Person
{
    public $age = 1;

    public function haveBirthday()
    {
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$manny = new Person();
$manny->haveBirthday();

$jane = new Person();
$jane->haveBirthday();

echo $manny->age;
echo $jane->age;

// :: scope resolution operator
