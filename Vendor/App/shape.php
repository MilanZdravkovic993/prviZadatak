<?php
namespace Vendor\App;
    class Shape{
        protected $name; 

        public function __get($property) {
            if (property_exists($this, $property)) {
              return $this->$property;
            }
          }
}
?>