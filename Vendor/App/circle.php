<?php 
namespace Vendor\App;
class Circle extends Shape implements Formulas{
    private  $diametar;
    
    public function __construct($param)
    {
        $this->name = "Circle";
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