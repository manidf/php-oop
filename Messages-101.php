<?php

  class Person {

    public function __constructor($name)
    {
      $this->name = $name;
    }

  }

  class Business {
    protected $staff;
    public function __constructor(Staff $staff) //type hint
    {
      $this->staff = $staff;
    }

    public function hire(Person $person) //type hint
    {
      $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }

  }

  class Staff {
    protected $members = [];
    public function __constructor($members = [])
    {
      $this->members = $members;
    }
    public function add(Person $person)
    {
      $this->members[] = $person;
    }

  }

  $mannyFerreira = new Person('Mannuel Ferreira');

  $staff = new Staff([$mannyFerreira]);

  $laracasts = new Business($staff);

  $laracasts->hire(new Person('Jane Joe'));

  var_dump($staff);
