<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Article;

session_start();

class ArticleController extends Controller{
    
    public function showArticles(){
        if(isset($_SESSION['auth'])){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $searchWord = $_POST['search'];
                list($data, $users) = (new Article) -> getSearchItems($searchWord);
                $count = count($data);
                $userPhoto = [];
                krsort($data);
                foreach($users as $user){
                    $userPhoto[$user['id']] = $user['photo'];
                }
            return $this->render('articles/articles' , ['data' => $data , 'count' => $count ,'users' => $userPhoto]);
            }else{
                list($data, $users) = (new Article) -> getItems();
                $count = count($data);
                $userPhoto = [];
                krsort($data);
                foreach($users as $user){
                    $userPhoto[$user['id']] = $user['photo'];
                }
            return $this->render('articles/articles' , ['data' => $data , 'count' => $count ,'users' => $userPhoto]);
            }
        }else{
            return $this->render('start/start');
        }
       
    }

    public function showArticle($params){
        if(isset($_SESSION['auth'])){
            $uid = $_SESSION['id'];
        $article = (new Article) -> getItem($params['id']);
        return $this->render('articles/article' , ['article' => $article , 'uid' => $uid]);
        }else{
            return $this->render('start/start');
        }
    }

    public function createArticle(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!empty($_POST['title']) && !empty($_POST['post'])){
                $title = htmlentities(trim($_POST['title']));
                $content = htmlentities(trim($_POST['post']));
                $flag = (new Article) -> insertPost($title , $content , $_SESSION['id']);
                if($flag){
                    header('Location:/articles');
                }else{
                    die('Error');
                }
            }else{
                die('write content');
            }
        }
        if(isset($_SESSION['auth'])){
            return $this->render('articles/createArticle');
        }else{
            return $this->render('start/start');
        }
    }

    public function deleteArticle($params){
        $flag = (new Article) -> deletePost($params['id']);
        if($flag){
            header('Location:/articles'); 
        }else{
            die('Error');
        }
    }


}