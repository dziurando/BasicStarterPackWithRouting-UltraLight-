<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of UserSesionController
 *
 * @author Rozrabiaka
 */
use Requests\Data\Session;
class UserSesionController extends Session {
    
    function __construct(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(!isset($_SESSION['user'])){
            $_SESSION['user']=array();
        }
        parent::__construct($_SESSION['user']);
        
    }
    function logout(){
        $this->data=array();
    }
    
    function login($uid){
        session_regenerate_id();
        $this->data['id']=session_id();
        $this->data['uid']=$uid;
    }
    //put your code here
}
