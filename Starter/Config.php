<?php
class Config{
    public static $params=array("root_path"=>NULL,"protocol"=>NULL,"host"=>NULL,"url"=>NULL,"routes_path"=>NULL,"charset"=>NULL,"composer"=>NULL,"debug"=>NULL);
    protected static $db=[];

    public static function Root(){
        return self::$params["root_path"];
    }
    public static function Protocol(){
      return self::$params["protocol"];  
    }
    public static function Host(){
        return self::$params["host"];
    }
    public static function Url(){
        return self::$params["url"];
    }
    public static function Uri(){
        return self::$params["uri"];
    }
    public static function Routes(){
       return self::$params["routes_path"];
    }
    public static function Charset(){
       return self::$params["charset"];
    }
    public static function Debug(){
       return self::$params["debug"];
    }
    public static function Composer(){
       return self::$params["composer"];
    }
    public static function Test($r){
        var_dump($r);
    }
    protected static function setParams($file){
        $array=include($file);
        if(!array_diff_key(self::$params, $array)){
            if(substr($array['uri'], -1)=="/"){
                $array['uri']=substr($array['uri'],0,-1);
            }
            if(substr($array['url'], -1)=="/"){
                $array['url']=substr($array['url'],0,-1);
            }
            self::$params=$array;
        }else{
            die("Config file error");
        }
    }
    
    function setDb($file){
        self::$db=include($file);
    }
    
    public static function getDb(){        
        return self::$db;
    }
    
    public static function get(){
        return self::$params;
    }
    
    public static function load($dir){
       self::setParams($dir."/config.php");
       self::setDb($dir."/database.php");
    }
}
