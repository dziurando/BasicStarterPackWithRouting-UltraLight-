<?php

namespace Requests\Data;
class RequestData{
    public $data;
    
    public function __get($name = false) {
        if (!$name) {
            return $this->data;
        }
        return (isset($this->data[$name]) ? $this->data[$name] : NULL);
    }
    protected function __construct(&$array) {
        $this->data=&$array;
    }
    protected static function create(){      
        return new self();
    }

    public function get($name=false) {
        return $this->__get($name);
    }
    public function is_set($name){
        return isset($this->data[$name]);
    }
    
}