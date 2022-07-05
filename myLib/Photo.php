<?php
namespace MyLib;


class Photo{

    public function prepareDir(){
        $images = [];
        $files = scandir('./project/webroot/photos');
        print_r($files);
        foreach($files as $file){
            if(is_file("./project/webroot/photos/$file") && preg_match('/.*\.jpg$/' , $file)){
                $images[] = $file;
            }
        }
    }

    public function setPhoto($photo){
        $err = '';
        $name = '';
       if($photo['name'] === ''){
        $err = 'Файл не выбран';
       }else if($photo['size'] === 0){
        $err = 'файл слишком большой';
       }else if(!preg_match('/.*\.jpg$/' , $photo['name'])){
        $err = 'Только jpg формат!';
       }else{
        $name = mt_rand(0 , 1000000) . '.jpg';
        copy($photo['tmp_name'] , './project/webroot/photos/' . $name);
       }
       return [$err,$name];
    }

    public function getPhoto(){

    }
}