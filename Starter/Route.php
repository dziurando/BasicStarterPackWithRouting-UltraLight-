<?php
 class Route {
    public static $currentRequest;
    protected function __construct() {
    }

    public function get($uri, $action) {
       return Requests\Request::get($uri, $action)->run(self::$currentRequest);       
    }
    public function post($uri, $action) {
        return Requests\Request::post($uri, $action)->run(self::$currentRequest);
    }
    
    public function ajax($uri, $action) {
        return Requests\Request::ajax($uri, $action)->run(self::$currentRequest);
    }
    public function form($uri, $action) {
        return Requests\Request::form($uri, $action)->run(self::$currentRequest);
    }
    public static function getRouteMap() {
        return require(Config::Root().Config::Routes());
    }
    public static function routeCurrent() {
        self::$currentRequest=Requests\Request::current();
        self::getRouteMap();
    }

}
