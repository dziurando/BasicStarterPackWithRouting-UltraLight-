<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
/**
 * Description of UserController
 *
 * @author Rozrabiaka
 */
use Requests\CurrentRequest;
use Requests\Data\Session;
use  App\Models\User;
use Route;
use View;
class UserController {
    protected $id;
    protected $Session;

    function __construct() {
        $this->Session=new UserSesionController();
        
    }
    public static function showLoginPage(CurrentRequest $req){
        //$user = new UserController();
        //$user->Session->id="nie22222";
        echo "ShowLoginPage";
    }
    
    function is_loged(){
        return ($this->Session->id === NULL?false:true);
    }
    
    function logout(){
        $this->Session->logout();
    }
    
    function login($login,$password){
        $this->id=User::login("ddd","ddd");
        $this->Session->login($this->id);
    }

    
}
