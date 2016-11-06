<?php
namespace Responses;
class Response {
    
   public static function ajax($data){
       return new AjaxResponse($data);
   }
   
   public static function html(){
       // header("Content-Type: text/html; charset=".\Config::Charset());
        
   }
   
}
