<?php
 require 'autoloader.php';

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
 echo "<br>";
 $treci = new Rectangle("Pravougaonik", 3,4);
 echo ($treci->name);
 echo "<br>";
 echo ($treci->circumference());
 echo "<br>";
 echo ($treci->area());
?>