<?php
class Database{
    protected $config=false;
    protected $connection_name;
    protected static $connection=[];
    
    function __construct($connection_name){
        $this->connection_name=$connection_name;
        $this->initCon($this->connection_name,$this->config);
    }
    public static function initialize(){
        $tmp=new Database();
    }
    protected static function initCon($connection_name="main",&$config=false){
        $config=(!$config?Config::getDb():$config);
        try {
            self::$connection[$connection_name] = new PDO(
                    'mysql:host='.$config['host'].';dbname='.$config['database'],
                    $config['login'],
                    $config['pass']
                    ,array (
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC)
            );
        } catch (PDOException $e) {
            die("<br/>Error! Can not connect to DB.<br/>".$e);
        }
    }
    protected static function createConnection($connection_name="main"){
        if(!isset(self::$connection[$connection_name])){
           self::initCon();
       }
    }
    
    public static function selectAll($table_name,$connection_name="main"){
       self::createConnection();
       return self::$connection[$connection_name]->query("SELECT * from ".$table_name)->fetchAll();
    }
}