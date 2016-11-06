<?php
namespace Responses;
class AjaxResponse extends Response{
    
    protected $data;
    
    public function __construct($data){
        $this->data=$data;
    }
    
    protected function header(){
       header("Content-Type: application/json; charset=".\Config::Charset()); 
    }
    public function send(){
        $this->header();
        echo json_encode($this->data);
    }
    
}