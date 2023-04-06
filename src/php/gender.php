<?php

if(!empty($_POST['lastname'])){
    $lastName = $_POST['lastname'];
    if(preg_match('/[^а-я ]/',$lastName)){

        if(substr($lastName, -4) == 'ич' || substr($lastName, -4) == 'ыч' || substr($lastName, -4) == 'лы'){
            echo 'Мужское отчество';
        }
        else if(substr($lastName, -4) == 'на' || substr($lastName, -4) == 'зы'){
            echo 'Женское отчество';
        }
        else {
            if(!empty($_POST['name'])){
                $name = $_POST['name'];
                if(preg_match('/[^а-я ]/',$name)){
                    if(!substr($name, -2) == 'а'){
                        echo 'Мужское имя';
                    }
                    else if(substr($name, -2) == 'а' || !substr($name, -2) == 'я' || !substr($name, -2) == 'э' || !substr($name, -2) == 'и'){
                        echo 'Женское имя';
                    }
                }
                else {
                    echo 'Отчество может состоять только из кириллицы!';
                    
                }
            }
        }   
    }
    
    else {
        echo 'Отчество может состоять только из кириллицы!';
    }

}
else{
    $name = $_POST['name'];
    
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $kek = substr($name, -2);
        
        if(preg_match('/[^а-я ]/',$name)){
         
            
            if(substr($name, -2) == 'а' || substr($name, -2) == 'я' || substr($name, -2) == 'э' || substr($name, -2) == 'и'){
                echo 'Женское имя';
            }
            else {
                echo 'Мужское имя';
            }
        }
        else {
            echo 'Отчество может состоять только из кириллицы!';
        }
    }
    else {

        echo 'Пол определить не удалось';
    }
}


?>