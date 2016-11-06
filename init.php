<?php

include_once __DIR__.'/autoload.php';

if(Config::Composer()){
$composer=require_once __DIR__."/vendor/autoload.php"; // COMPOSER INIT FOR PROJECT
}
Config::load(__DIR__."/config/");
if(Config::Debug()){
    //include_once __DIR__.'/Debug/Debug.php';
    include_once __DIR__.'/Debug/kint/Kint.class.php';
    include_once __DIR__.'/Debug/TimeDebug.php';
}
Route::routeCurrent();
