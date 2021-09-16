<?php
 require 'autoloader.php';
//Just creating instances of Classes and echoing values of Area and Circumference 
 $shapeA = new Circle("Circle",5);
 echo ($shapeA->name);
 echo("\n Circumference:");
 echo ($shapeA->circumference());
 echo("\n Area:");
 echo ($shapeA->area());
 echo("\n");
 $shapeB = new Triangle("Triangle", 4 , 4, 4);
 echo ($shapeB->name);
 echo("\n Circumference:");
 echo ($shapeB->circumference());
 echo("\n Area:");
 echo ($shapeB->area());
 echo("\n");
 $shapeC = new Rectangle("Rectangular", 3,4);
 echo ($shapeC->name);
 echo("\n Circumference:");
 echo ($shapeC->circumference());
 echo("\n Area:");
 echo ($shapeC->area());
 echo("\n");
 $shapeD = new Square("Square", 3);
 echo ($shapeD->name);
 echo("\n Circumference:");
 echo ($shapeD->circumference());
 echo("\n Area:");
 echo ($shapeD->area());
?>