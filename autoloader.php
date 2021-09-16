<?php

spl_autoload_register(
    function ($class_name) {
        $class_name = strtolower($class_name);
        $class_name=str_replace('\\','/',$class_name);
        require_once("{$_SERVER['DOCUMENT_ROOT']}/prviZadatak/".$class_name . ".php");
    }
);