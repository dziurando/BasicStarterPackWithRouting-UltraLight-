<?php
function AppClassLoader($classname){
    if (class_exists($classname, false)){ return; }
    $file =__DIR__.'\\Starter\\'.$classname.'.php';
    if (file_exists($file) && is_readable($file) && !class_exists($classname, false)){
        require_once($file);
        return true;
    }
    $file =__DIR__.'\\'.$classname.'.php';
    if (file_exists($file) && is_readable($file) && !class_exists($classname, false)){
        require_once($file);
        return true;
    }   
    return false;
}
spl_autoload_register(null, false);
spl_autoload_extensions('.php');
spl_autoload_register('AppClassLoader');


