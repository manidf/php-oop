<?php
  // contract, reusable attributes
  abstract class Shape {

    protected $color;

    public function _constuctor($color = 'red')
    {
      $this->color= $color;
    }

    public function getColor()
    {
      return $this->color;
    }
  }

  class Square extends Shape {
    protected $length = 60;

    public function getArea()
    {
      return pow($this->length, 2);
    }
  }

  class Triangle extends Shape {
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
      return .5 * $this->base * $this->height;
    }
  }

  class Circle extends Shape {

  }

  // new Square(red);
  echo(new Square())->getColor();
