<?php

if(!empty($_POST['world'])){
    $world = $_POST['world'];
    if(preg_match('/[^а-я ]/',$world)){

        if(substr($world, -4) == 'ья' || $world == 1){
            echo 'Именительный падеж ';
            echo 'В единственном числе:	статья ';
            echo 'Во множественном числе: статьи';
        }
        else if(substr($world, -4) == 'ей' || $world == 2){
            echo 'Родительный падеж ';
            echo 'В единственном числе:	статьи ';
            echo 'Во множественном числе: статей';
        }
        else if(substr($world, -4) == 'ям' || $world == 3){
            echo 'Дательный падеж ';
            echo 'В единственном числе:	статье ';
            echo 'Во множественном числе: статьям';
        }
        else if(substr($world, -4) == 'ью' || $world == 4){
            echo 'Винительный падеж ';
            echo 'В единственном числе:	статью ';
            echo 'Во множественном числе: статьи';
        }
        else if(substr($world, -4) == 'ёй' || substr($world, -4) == 'ми' || $world == 5){
            echo 'Творительный падеж ';
            echo 'В единственном числе:	статьёй ';
            echo 'Во множественном:	статьями';
        }
        else if(substr($world, -4) == 'ях' || $world == 6){
            echo 'Предложный падеж ';
            echo 'В единственном числе:	статье ';
            echo 'В единственном числе:	статьях';
        }
        else if(substr($world, -4) == 'ье'){
            echo 'Определить падеж без контекста не удается. Варианты падежа: Предложный или Дательный падеж';
        }
        else if(substr($world, -4) == 'ьи'){
            echo 'Определить падеж без контекста не удается. Варианты падежа: Именительный, Родительный или  Винительный падеж';
        }
        else{
            echo 'Падеж определить не удалось, возможно, Вы ввели слово некорректно!';
        }
       
    }
    
    else {
        echo 'Введите только русские спец символы!';
    }

}


else if(!empty($_POST['number'])){
    $number = $_POST['number'];
    if(is_numeric($number)){ 
        if($number % 10 == '1'){
            echo 'Именительный падеж ';
            echo 'В единственном числе:	статья ';
            echo 'Во множественном числе: статьи';
        }
        else if($number % 10 == '2'){
            echo 'Родительный падеж ';
            echo 'В единственном числе:	статьи ';
            echo 'Во множественном числе: статей';
        }
        else if($number % 10 == '3'){
            echo 'В единственном числе:	статье ';
            echo 'Во множественном числе: статьям';
        }
        else if($number % 10 == '4'){
            echo 'Винительный падеж ';
            echo 'В единственном числе:	статью ';
            echo 'Во множественном числе: статьи';
        }
        else if($number % 10 == '5'){
            echo 'Творительный падеж ';
            echo 'В единственном числе:	статьёй ';
            echo 'Во множественном:	статьями';
        }
        else if($number % 10 == '6'){
            echo 'Предложный падеж ';
            echo 'В единственном числе:	статье ';
            echo 'В единственном числе:	статьях';
        }
        else{
            echo 'Падеж определить не удалось, вы ввели некорректное число!';
        }
    
    }
    
    else {
        echo 'Введите число!';
    }

}
else{
    echo 'Падеж определить не удалось';
}


?>