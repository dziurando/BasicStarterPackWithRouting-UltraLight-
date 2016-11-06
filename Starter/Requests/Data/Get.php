<?php

namespace Requests\Data;

class Get extends RequestData {
    public static function create(){      
        return new self($_GET);
    }

}
