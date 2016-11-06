<?php

abstract class Element{
    protected $tag;
    protected $attributes;
    protected $output;
    
    abstract function __construct($attributes);
    public function create($content){
        $this->output=$content;
        return $this;
    }
    
    function show(){
        echo $this->getOutput();
    }
    function getOutput(){
        return $this->open().$this->output.$this->close();
    }
    function setName($value){
        $this->attributes["name"]=$value;
        return $this;
    }
    function setClass($value){
        $this->attributes["class"]=$value;
        return $this;
    }
    function setId($value){
        $this->attributes["id"]=$value;
        return $this;
    }
    protected function getAttributes(){
        return (is_array($this->attributes)?(count($this->attributes)>0?str_replace("//","\"" ,str_replace("=", "=\"", http_build_query($this->attributes, null, "//")))."\" ":""):$this->attributes);
    }
    
    public function setAttributes($array){
        if(is_array($array)){
            $this->attributes=$array;
        }
        return $this;
    }
    public function setAttribute($key,$value){
        $this->attributes[$key]=$value;
    }
    
    abstract static function generate($content,$attributes);
    protected function open(){
        return '<'.$this->tag.' '.$this->getAttributes().'>';
    }
    
    protected function close(){
        return '</'.$this->tag.'>';
    }
    
}