<?php

namespace Requests\Data;

class Post extends RequestData{
    
    public static function create(){      
        return new self($_POST);
    }
}
