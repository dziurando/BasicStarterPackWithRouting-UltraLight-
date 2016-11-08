<?php
include_once __DIR__.'/autoload.php';
Config::load(__DIR__."/config/");
//if(Config::Composer()===true){
//$composer=require_once __DIR__."/vendor/autoload.php"; // COMPOSER INIT FOR PROJECT
//}
//if(Config::Debug()===true){
//    //include_once __DIR__.'/Debug/Debug.php';
//    include_once __DIR__.'/Debug/kint/Kint.class.php';
//    include_once __DIR__.'/Debug/TimeDebug.php';
//}die();
Route::routeCurrent();
