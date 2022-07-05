<?php

namespace Project\Models;
use Core\Database;
use \Core\Model;


class Profile extends Model{
    
    public function getUser(int $id) : array{
        $database = new Database;
        $data = $database->getUser($id);
        return $data;
    }

    public function editProfile(int $id , string $role, string $fullname = 'пусто' , string $adress  = 'пусто' , string $description  = 'пусто' , string $git  = 'пусто' , string $instagram  = 'пусто'){
        $database = new Database;
        $res = $database->editProfile($id ,$role, $fullname ,$adress ,$description , $git ,$instagram);
        return $res;
    }

    public function getItemForUser(int $userid){
        $database = new Database;
        $res = $database->getItemForUser($userid);
        return $res;
    }
}