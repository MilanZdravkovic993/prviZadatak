<?php
 require 'autoloader.php';
 use \Vendor\App\Circle, \Vendor\App\Rectangle, \Vendor\App\Square, \Vendor\App\Triangle;

//Creating instances of Classes
 $shapeA = new Circle("Circle", 5);
 $shapeB = new Triangle("Triangle", 4, 4, 4);
 $shapeC = new Rectangle("Rectangle", 3, 4);
 $shapeD = new Square("Square", 3);

 //Echoing Area and Circumference for first shape
 echo ($shapeA->name);
 echo("\n Circumference:");
 echo ($shapeA->circumference());
 echo("\n Area:");
 echo ($shapeA->area());
 echo("\n");
//Echoing Area and Circumference for second shape
 echo ($shapeB->name);
 echo("\n Circumference:");
 echo ($shapeB->circumference());
 echo("\n Area:");
 echo (number_format($shapeB->area(),2));
 echo("\n");
//Echoing Area and Circumference for third shape
 echo ($shapeC->name);
 echo("\n Circumference:");
 echo ($shapeC->circumference());
 echo("\n Area:");
 echo ($shapeC->area());
 echo("\n");
//Echoing Area and Circumference for fourth shape
 echo ($shapeD->name);
 echo("\n Circumference:");
 echo ($shapeD->circumference());
 echo("\n Area:");
 echo ($shapeD->area());
?>