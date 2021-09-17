<?php
 require 'autoloader.php';
 use \Vendor\App\{Circle,Formulas,Rectangle,Triangle,Square,Shape};

//Creating instances of Classes
 $shapeA = new Circle(5);
 $shapeB = new Triangle(4, 4, 4);
 $shapeC = new Rectangle(3, 4);
 $shapeD = new Square(3);

function showCalc(Formulas $fObject)
    {
        echo $fObject->getName();
        echo("\n Circumference:");
        echo $fObject->circumference();
        echo("cm \n Area:");
        echo number_format($fObject->area(),2);
        echo("cm squared \n");
        
    }


 //Echoing Area and Circumference for first shape
 showCalc($shapeA);
 showCalc($shapeB);
 showCalc($shapeC);
 showCalc($shapeD);
?>