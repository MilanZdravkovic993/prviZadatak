<?php 
namespace Vendor\App;

class Rectangle extends Shape implements Formulas{

    private  $width;
    private  $height;
   
   public function __construct($name, $paramA, $paramB)
    {
        $this->name = $name;
        $this->width = $paramA;
        $this->height = $paramB;
    }

    public function getName()
    {
        return ($this->name);
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