<?php

$number = $_POST['number'];

if(!preg_match('/[^0-9]/',$number)){ 
    if($number % 100 >= '10' && $number % 100 <= '20'){ 
        echo $number, ' статей ';
    }
    else {  
        if($number % 10 == '1'){
            echo $number, ' статья ';
        }
        else if($number % 10 == '2' || $number % 10 == '3' || $number % 10 == '4'){
            echo $number, ' статьи ';
        }
        else if($number % 10 >= '5' || $number % 10 <= '9' || $number % 10 == '0'){
            echo $number, ' статей ';
        }
        else{
            echo 'Падеж определить не удалось, вы ввели некорректное число!';
        }
    }
    
}
else{
    echo 'Вы ввели некорректное значение!';
}

?>