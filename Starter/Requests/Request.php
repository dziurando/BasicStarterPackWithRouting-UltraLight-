<?php
namespace Requests;
use \Config;
class Request {
    public $method;
    public $uri;
    public $action;
    public $cross_orgin;
    public $content_type;
    public $id; 
   
    private function __construct() {}
    public static function current(){
        return new CurrentRequest();
    }
    
    public static function get(&$uri,&$action,&$cross_orgin=false){       
        return new GetRequest($uri,$action,$cross_orgin);
    }
    
    public static function post(&$uri,&$action,&$cross_orgin=false){
        return new PostRequest($uri,$action,$cross_orgin);
    }
    
    public static function ajax(&$uri,&$action,&$cross_orgin=false){
        return new AjaxRequest($uri,$action,$cross_orgin);
    }
    
    public static function form(&$uri,&$action,&$cross_orgin=false){
        return new FormRequest($uri,$action,$cross_orgin);
    }
    
    public function parseAction($action){
        return $action;
    }
    public function run(&$currentRequest){       
        if($this->id===$currentRequest->id){ 
            if($_SERVER['SERVER_NAME'] === Config::Host()){
                call_user_func($this->action,$currentRequest);die;                              
            }elseif($this->cross_orgin===true){
                call_user_func($this->action,$currentRequest);die; 
            }else{
                return die('No cross orgin allowed');
            }
        }
       return false;
    }

}
