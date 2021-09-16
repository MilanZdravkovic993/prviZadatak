<?php 
require_once 'shape.php';
require_once 'formulas.php';
class Triangle extends Shape implements Formulas{

    public $sideA;
    public $sideB;
    public $sideC;

    public function __construct($name,int $paramA,int $paramB,int $paramC)
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