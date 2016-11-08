<?php
namespace Requests;
class GetRequest extends Request{
    
    protected function __construct($uri=false,$action=false,$cross_orgin=false) {
        $this->method="GET";
        $this->uri=$uri;
        $this->action=$action;
        $this->content_type="*";
        $this->cross_orgin=$cross_orgin;
        $this->id=$this->uri.$this->content_type.$this->method;
    }
    
}


