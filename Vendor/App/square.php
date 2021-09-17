<?php
namespace Vendor\App;

class Square extends Shape implements Formulas{
    private  $width;
    public function __construct($paramA )
    {
        $this->name = "Square";
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