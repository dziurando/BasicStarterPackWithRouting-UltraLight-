<?php

class Option extends Element{
    
    
    function __construct($attributes) {
        $this->tag="option value=\"{$attributes}\"";
    }
    
    public static function generate($text,$value) {
        $option = new Option($value);
        $option->create($text);
        return $option;
    }
    
}
