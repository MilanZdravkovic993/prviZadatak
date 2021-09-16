<?php
 require_once 'shape.php';
 require_once 'circle.php';
 require_once 'triangle.php';

 $prvi = new Circle("krug",5);
 echo ($prvi->name);
 echo "<br>";
 echo ($prvi->circumference());
 echo "<br>";
 echo ($prvi->area());
 echo "<br>";
 $drugi = new Triangle("Trougao", 4 , 4, 4);
 echo ($drugi->name);
 echo "<br>";
 echo ($drugi->circumference());
 echo "<br>";
 echo ($drugi->area());
?>