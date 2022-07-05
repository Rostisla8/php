<?php

namespace Project\Models;
use Core\Database;
use \Core\Model;


class Users extends Model{
    
    public function getUsers(){
        $database = new Database;
        $data = $database->getUsers();
        return $data;
    }
}
