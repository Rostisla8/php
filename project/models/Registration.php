<?php

namespace Project\Models;
use Core\Database;
use \Core\Model;


class Registration extends Model{
    
    public function setRegData($login , $password , $email , $photo){
        $database = new Database;
        $flag = $database->registration($login , $password , $email , $photo);
        return $flag;
    }
}
