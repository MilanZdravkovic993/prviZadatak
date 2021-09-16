<?php
 require 'autoloader.php';

 $prvi = new Circle("krug",5);
 echo ($prvi->name);
 echo("\n");
 echo ($prvi->circumference());
 echo("\n");
 echo ($prvi->area());
 echo("\n");
 $drugi = new Triangle("Trougao", 4 , 4, 4);
 echo ($drugi->name);
 echo("\n");
 echo ($drugi->circumference());
 echo("\n");
 echo ($drugi->area());
 echo("\n");
 $treci = new Rectangle("Pravougaonik", 3,4);
 echo ($treci->name);
 echo("\n");
 echo ($treci->circumference());
 echo("\n");
 echo ($treci->area());
?>