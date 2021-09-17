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
            return "Name is not set";
            }
        }
        
}
?>