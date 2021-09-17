<?php
 require 'autoloader.php';
//Just creating instances of Classes
 $shapeA = new Vendor\App\Circle("Circle",5);
 $shapeB = new Vendor\App\Triangle("Triangle", 4 , 4, 4);
 $shapeC = new Vendor\App\Rectangle("Rectangular", 3,4);
 $shapeD = new Vendor\App\Square("Square", 3);

 //Echoing Area and Circumference
 echo ($shapeA->name);
 echo("\n Circumference:");
 echo ($shapeA->circumference());
 echo("\n Area:");
 echo ($shapeA->area());
 echo("\n");
 
 echo ($shapeB->name);
 echo("\n Circumference:");
 echo ($shapeB->circumference());
 echo("\n Area:");
 echo ($shapeB->area());
 echo("\n");
 
 echo ($shapeC->name);
 echo("\n Circumference:");
 echo ($shapeC->circumference());
 echo("\n Area:");
 echo ($shapeC->area());
 echo("\n");
 
 echo ($shapeD->name);
 echo("\n Circumference:");
 echo ($shapeD->circumference());
 echo("\n Area:");
 echo ($shapeD->area());
?>