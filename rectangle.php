<?php 
require 'autoloader.php';
class Rectangle extends Shape implements Formulas{
    public  $width;
    public  $height;
    public function __construct($name, $paramA, $paramB )
    {
        $this->name = $name;
        $this->width = $paramA;
        $this->height = $paramB;
    }

    public function circumference()
    {
        return (2*($this->width + $this->height ));
    }
    public function area()
    {
        return($this->width * $this->height);
    }

}