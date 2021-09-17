<?php
namespace Vendor\App;
  abstract class Shape{
        protected $name; 

        public function getName(){
            if(isset($this->name)){
                return $this->name;
            }
            else
            {
            echo "Name is not set";
            }
        }
        
}
?>