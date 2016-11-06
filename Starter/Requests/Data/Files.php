<?php

namespace Requests\Data;

class Files{
    public static function create(){      
        return new self($_FILES);
    }
}


