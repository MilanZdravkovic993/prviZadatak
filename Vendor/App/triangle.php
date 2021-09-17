<?php 
namespace Vendor\App;

class Triangle extends Shape implements Formulas{

    private $sideA;
    private $sideB;
    private $sideC;

    public function __construct($name, $paramA, $paramB, $paramC)
    {
        $this->name = $name;
        $this->sideA = $paramA;
        $this->sideB = $paramB;
        $this->sideC = $paramC;
    }
  
    public function circumference()
    {
        return ($this->sideA + $this->sideB + $this->sideC);
    }
    public function area()
    {
        $pom = ($this->sideA + $this->sideB + $this->sideC)/2;
        return sqrt($pom*($pom-$this->sideA)*($pom-$this->sideB)*($pom-$this->sideC));
   
    }


}