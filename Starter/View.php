<?php
class View {

    protected $view_files = [];
    protected $view_file_path;
    protected $view_file_head;
    protected $values;
    protected $objects;

    function __construct($view_file_path, $view_file_head) {
        $this->view_file_path = $view_file_path;
        $this->view_file_head = $view_file_head;
        $this->values = [];
        $this->objects=new stdClass();
        
    }

    function __get($name) {
        return array_key_exists($name, $this->values) ? $this->values[$name] :
                (isset($this->objects->{$name})?$this->objects->{$name}:NULL);
    }
    public function __set($key, $value) {
        $this->objects->{$key}=$value;
    }
    public function chain($file) {
        $this->view_files[] = $file;
        return $this;
    }
    
    public function script($file_path){
        echo"<script src=\"".Config::Url().'/'.$file_path."\"></script>\n";
    }
    public function style($file_path){
        echo"<link rel=\"stylesheet\" href=\"".Config::Url().'/'.$file_path."\"></link>\n";
    }
    
    public static function addView($file, $head = "head/head.php") {
        $tmp = new View(Config::Root() . '/resources/', $head);
        return $tmp->chain($file);
    }

    public function assign($values, $key = false) {
        if (is_array($values) && !$key) {
            $this->values = array_merge($this->values, $values);
        }elseif(!$key&&is_object($values)){
            $this->values[get_class($values)]=$values;
        } elseif ($key != false) {
            $this->values[$key] = $values;
        } else{
            $this->{$values}="";
        }
        return $this;
    }

    public function show() {
        Responses\Response::html();
        echo "<!DOCTYPE html>\n<html>\n<head>\n";
        include($this->view_file_path . $this->view_file_head);
        echo "</head>\n<body>\n";
        foreach ($this->view_files as $vf) {
            include($this->view_file_path . $vf);
        }
        echo"\n</body>\n</html>";
        return $this;
    }

}
