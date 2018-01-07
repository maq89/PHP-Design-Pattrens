<?php
/*
 * In class-based programming, the factory method pattern is a creation pattern
 * which uses factory methods to deal with the problem of creating objects without
 * specifying the exact class of object that will be created.
 * This is done by creating objects via calling a factory method - either specified
 * in an interface and implemented by child classes, or implemented in a base class and
 * optionally overridden by derived classes - rather than by calling a constructor.
 */

class Position{}

interface Shape{
    public function draw();
}

class Rectangle implements Shape{

    private $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function draw()
    {
        return 'Draw Rectangle...';
    }
}

class Circle implements Shape{

    private $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function draw()
    {
        return 'Draw Circle...';
    }
}

class Triangle implements Shape{

    private $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function draw()
    {
        return 'Draw Triangle...';
    }
}

class ShapeFactory{

    public function __construct()
    {
    }

    public function create($type)
    {
        if($type == 'Rectangle'){
            return new Rectangle(new Position);
        }

        if($type == 'Circle'){
            return new Circle(new Position);
        }

        if($type == 'Triangle'){
            return new Triangle(new Position);
        }
    }
}

$factory = new ShapeFactory();
$rectangle = $factory->create('Rectangle');
$circle = $factory->create('Circle');
$triangle = $factory->create('Triangle');

echo $rectangle->draw().'<br>';
echo $circle->draw().'<br>';
echo $triangle->draw().'<br>';