<?php
namespace Core;

use PDOException;

class Database{
    private $db;

    public function __construct()
    {
        try{
            $this->db = new \PDO("mysql:host=localhost;dbname=social" , "root" , "root");
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            print $ex->getMessage();
        }
        
    }
    public function getItems(){
        $querry = "SELECT * FROM articles";
        $prepareQuerry = $this->db->query($querry);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }

     public function getSearchItems($searchWord){
        /*
        $searchWord = $this->db->quote($searchWord);
        $searchWord = strtr($seaarch, ['_' => '\_', '%' => '\%']);
        */
        $querry = "SELECT * FROM articles WHERE title LIKE '%$searchWord%'";
        $prepareQuerry = $this->db->query($querry);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }


     public function getItem($id){
        $querry = "SELECT * FROM articles WHERE id = $id";
        $prepareQuerry = $this->db->query($querry);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }

     public function getItemForUser($id){
        $querry = "SELECT * FROM articles WHERE userid = $id";
        $prepareQuerry = $this->db->query($querry);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }


     public function deleteItem($id){
        $params =[
            'id' => $id,
        ];

        $querry = "DELETE FROM articles WHERE id = :id";
        $prepareQuerry = $this->db->prepare($querry);
        $res = $prepareQuerry->execute($params);
        if($res){
            return true;
        }else{
            return false;
        }
     }

     public function registration($login , $password , $email , $photo){
        $params =[
            'login' => $login,
            'password' => $password,
            'email' => $email,
            'photo' => $photo,
        ];

        $querry = "INSERT INTO users (login , password , email , photo) VALUES (:login , :password, :email , :photo)";
        $prepareQuerry = $this->db->prepare($querry);
        $res = $prepareQuerry->execute($params);
        if($res){
            return true;
        }else{
            return false;
        }
     }

     public function login($login){
        $params =[
            'login' => $login,
        ];

        $querry = "SELECT * FROM users WHERE login = :login";
        $prepareQuerry = $this->db->prepare($querry);
        $prepareQuerry->execute($params);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }


     public function getUser($id){
        $params =[
            'id' => $id,
        ];

        $querry = "SELECT * FROM users WHERE id = :id";
        $prepareQuerry = $this->db->prepare($querry);
        $prepareQuerry->execute($params);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }


     public function getUsers(){
        $querry = "SELECT * FROM users";
        $prepareQuerry = $this->db->query($querry);
        return $prepareQuerry->fetchAll(\PDO::FETCH_ASSOC);
     }


     public function insertPost($title , $post , $userid){
        $params =[
            'title' => $title,
            'content' => $post,
            'userid' => $userid,
        ];

        $querry = "INSERT INTO articles (title , content , userid) VALUES (:title , :content , :userid)";
        $prepareQuerry = $this->db->prepare($querry);
        $res = $prepareQuerry->execute($params);
        if($res){
            return true;
        }else{
            return false;
        }
     }

     public function editProfile(int $id ,string $role, string $fullname ,string $adress ,string $description ,string $git ,string $instagram){
        $params =[
            'id' => $id,
            'fullname' => $fullname,
            'adress' => $adress,
            'description' => $description,
            'git' => $git,
            'instagram' => $instagram,
            'role' => $role,
        ];

        $querry = "UPDATE users SET fullname = :fullname , adress = :adress , description = :description , git = :git , instagram = :instagram , role = :role WHERE id = :id ";
        $prepareQuerry = $this->db->prepare($querry);
        $res = $prepareQuerry->execute($params);
        if($res){
            return true;
        }else{
            return false;
        }
     }




}










?>