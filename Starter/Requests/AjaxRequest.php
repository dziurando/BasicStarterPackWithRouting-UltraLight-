<?php
namespace Requests;
class AjaxRequest extends Request{
    protected function __construct($uri=false,$action=false,$cross_orgin=false,$method="POST") {
        $this->method=$method;
        $this->uri=$uri;
        $this->action=$action;
        $this->content_type="application/json";
        $this->cross_orgin=$cross_orgin;
        $this->id=$this->uri.$this->content_type.$this->method;
    }
}