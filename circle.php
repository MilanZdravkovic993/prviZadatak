<?php 
require 'autoloader.php';
class Circle extends Shape implements Formulas{
    public  $diametar;
    
    public function __construct($name,int $param)
    {
        $this->name = $name;
        $this->diametar = $param;
    }

    public function circumference()
    {
        return ($this->diametar * 3.14 * 2);
    }
    public function area()
    {
        return($this->diametar*$this->diametar*3.14);
    }

}