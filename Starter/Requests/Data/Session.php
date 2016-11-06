<?php

namespace Requests\Data;

class Session extends RequestData{
    function __construct(&$s) {
        
        $this->data=&$s;
    }
    function __set($name, $value) {
        
        $this->data[$name]=$value;
    }
    function is_set($name){
        return (isset($this->data->$name)?true:false);
    }

    function register($name){
       if(!$this->is_set($name)){
           $this->data[$name]=array();
           return new Session($_SESSION[$name]);
       }
       
    }
    public static function create(){   
        session_start();
        return new self($_SESSION);
    }
}