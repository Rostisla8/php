<?php

namespace Project\Models;
use Core\Database;
use \Core\Model;


class Login extends Model{
    
    public function getUser($login){
        $database = new Database;
        $data = $database->login($login);
        return $data;
    }
}
