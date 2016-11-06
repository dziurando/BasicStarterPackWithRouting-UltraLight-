<?php
class Html{
    public static function select($content,$attributes=array()){
        return Select::generate($content, $attributes);
    }
}