<?php

class Shape
{
    public function calculateArea()
    {
        
    }
}

class Square extends Shape
{
    public $canh;

    public function __construct($canh)
    {
        $this->canh = $canh;
    }

    public function calculateArea()
    {
        return $this->canh * $this->canh;
    }
}

class Circle extends Shape
{
    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function calculateArea()
    {
        return pi() * $this->r * $this->r;
    }
}


$square = new Square(5);
$circle = new Circle(3);

echo "Diện tích hình vuông: " . $square->calculateArea() . "\n";
echo "Diện tích hình tròn: " . $circle->calculateArea();
