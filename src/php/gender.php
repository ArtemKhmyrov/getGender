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
       
    }
    
    else {
        echo 'Отчество может состоять только из кириллицы!';
    }

}
else{
    echo 'Пол определить не удалось';
}


?>