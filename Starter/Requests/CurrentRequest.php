<?php
namespace Requests;


class CurrentRequest extends Request{
    protected $Post=false;
    protected $Get=false;
    protected $Session=false;
    protected $Files=false;
    
    function __get($name) {      
        $full_name="\Requests\Data\\".$name;
        if($this->$name===false&&method_exists($full_name,"create")){
            $this->$name=$full_name::create();
            return $this->$name;
        }else{
            return (false !==$this->$name?$this->$name:NULL);
        }

    }
    protected function __construct($root_uri) {
        $req=$_SERVER;
        $this->method=$req['REQUEST_METHOD'];
        if(isset($req['CONTENT_TYPE'])){
            $this->content_type=$req['CONTENT_TYPE'];
        }else{
            $this->content_type='*';
        }
        $this->uri=str_replace($root_uri,"",$req['REDIRECT_URL']);
        $this->id=$this->uri.$this->content_type;
    }
    
}

