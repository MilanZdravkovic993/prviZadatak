<?php 
namespace Vendor\App;

class Triangle extends Shape implements Formulas{

    private $sideA;
    private $sideB;
    private $sideC;

    public function __construct($paramA, $paramB, $paramC)
    {
        $this->name = "Triangle";
        $this->sideA = $paramA;
        $this->sideB = $paramB;
        $this->sideC = $paramC;
    }
    public function getName(){
        if(isset($this->name)){
            return $this->name;
        }
        else
        {
        echo "Name is not set";
        }
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