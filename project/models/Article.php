<?php

namespace Project\Models;
use Core\Database;
use \Core\Model;


class Article extends Model{
    
    public function getItems(){
        $database = new Database;
        $data = $database->getItems();
        $users = $database->getUsers();
        return [$data , $users];
    }

    public function getSearchItems($searchWord){
        $database = new Database;
        $data = $database->getSearchItems($searchWord);
        $users = $database->getUsers();
        return [$data , $users];
    }

    public function getItem($id){
        $database = new Database;
        $article = $database->getItem($id);
        return $article;
    }

    public function insertPost($title , $post ,$userid){
        $database = new Database;
        $flag = $database->insertPost($title , $post ,$userid);
        return $flag;
    }
    public function deletePost($id){
        $database = new Database;
        $flag = $database->deleteItem($id);
        return $flag;
    }

}
