<?php
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Profile;

session_start();

class ProfileController extends Controller{

    public function showProfile($params){
    if(!empty($params)){
        $data = (new Profile) -> getUser($params['id']);
        $articles = (new Profile) -> getItemForUser($params['id']);
        return $this->render('profile/profilePage' , ['data' => $data ,'articles' => $articles]);
    }else{
        $id = $_SESSION['id'];
        $data = (new Profile) -> getUser($id);
        $articles = (new Profile) -> getItemForUser($_SESSION['id']);
        return $this->render('profile/profilePage' , ['data' => $data ,'articles' => $articles]);
        }
    }

    public function editProfile(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_SESSION['id'];
            $role = htmlentities(trim($_POST['role'])) ?? 'пусто';
            $fullname = htmlentities(trim($_POST['fullname'])) ?? 'пусто';
            $adress = htmlentities(trim($_POST['adress'])) ?? 'пусто';
            $description = htmlentities(trim($_POST['description'])) ?? 'пусто';
            $git = htmlentities(trim($_POST['git'])) ?? 'пусто';
            $inst = htmlentities(trim($_POST['instagram'])) ?? 'пусто';
           $res = (new Profile) -> editProfile($id , $role ,$fullname , $adress , $description, $git, $inst);
           if($res){
            header('Location:/profile');
           }else{
            die('Возникла ошибка');
           }
        }
        return $this->render('profile/editPage');
    }

    public function exit(){
        unset($_SESSION['auth']);
        header('Location:/');
    }
}