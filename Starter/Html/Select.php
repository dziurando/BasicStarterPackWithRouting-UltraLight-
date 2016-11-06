<?php

class Select extends Element{
    function __construct($attributes = array()) {
        $this->tag="select";
        $this->setAttributes($attributes);
    }
    public function create($content){
        if(is_array($content)&&isset($content[0]['value'])&&isset($content[0]['text'])){
            foreach($content as $child){
                $this->output.=Option::generate($child['text'], $child['value'])->getOutput();
            } 
        }else{
            $this->output.=$content;
        }
        return $this;
    }
    static function generate($content, $attributes = array()) {
        $select=new Select($attributes);
        return $select->create($content);
    }
}