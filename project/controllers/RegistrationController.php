<?php
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Registration;
use MyLib\Photo;

session_start();

class RegistrationController extends Controller{

    public function registrationPage(){
        if(isset($_SESSION['auth'])){
            return $this->render('contacts/contacts');
        }else{
            return $this->render('registration/registration');
        }
    }

    public function processPage(){
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_FILES['file'])){
            if(strlen(trim($_POST['login']))<5 || strlen(trim($_POST['password']))<10){
                die('Регистрация не выполнена! Логин > 5 и пароль > 8');
            }else{
                $login = htmlentities(trim($_POST['login']));
                $password = password_hash(htmlentities(trim($_POST['password'])), PASSWORD_DEFAULT);
                $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
                list($err , $photoName) = (new Photo) -> setPhoto($_FILES['file']);
                if($err != ''){
                    die($err);
                }
                $photoName = $photoName;
            }
        }else{
            die('Не введены данные');
        }
        $request = (new Registration) -> setRegData($login, $password , $email , $photoName);
        if($request){
            header('Location:/login');
        }else{
            die('Возникли ошибки');
        }
    }

}

