<?php
require 'autoloader.php';
class Square extends Shape implements Formulas{
    public  $width;
    public function __construct($name, $paramA )
    {
        $this->name = $name;
        $this->width = $paramA;
    }

    public function circumference()
    {
        return (4*$this->width);
    }
    public function area()
    {
        return($this->width * $this->width);
    }

}