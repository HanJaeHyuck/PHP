<?php
function myLoader($name){
    require_once("./src/{$name}.php");
}

spl_autoload_register("myLoader");