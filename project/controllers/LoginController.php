<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Login;
session_start();

class LoginController extends Controller{

    public function loginPage(){
        if(isset($_SESSION['auth'])){
            return $this->render('contacts/contacts');
        }else{
            return $this->render('login/login');
        }
    }

    public function loginProcess(){
        if(!empty($_POST['login']) && !empty($_POST['password'])){
            $login = htmlentities(trim($_POST['login']));
            $password = htmlentities(trim($_POST['password']));
        }else{
            die('Не введены данные');
        }
        $data = (new Login) -> getUser($login);
        if(count($data) != 0){
            foreach($data as $item){
                if(!password_verify($password,$item['password'])){
                    print 'вы ввели неверные данные';
                }else{
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $item['id'];
                    header('Location:/articles');
                }
            }
        }else{
            print 'вы ввели неверные данные';
        }
        
    }

}