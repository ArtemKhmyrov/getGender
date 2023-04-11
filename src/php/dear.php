<?php

if(!empty($_POST['sername_dear'])){
    $sernameDear = $_POST['sername_dear'];
    if(preg_match('/[^а-я ]/',$sernameDear)){

        if(substr($sernameDear, -2) == "о" || substr($sernameDear, -2) == "ь"){
            echo ' ', $sernameDear;
        }

        else if(substr($sernameDear, -4) == "ов" || substr($sernameDear, -4) == "ев"){
            echo ' ', $sernameDear, 'у';
        }

        else if(substr($sernameDear, -6) == "ова" || substr($sernameDear, -6) == "ева"){
            $sernameDearNew = substr($sernameDear, 0, -2);
            echo ' ', $sernameDearNew, 'ой';
        }
        else {
            echo ' Не удалось просклонять Вашу фамилию!';
        }
    }
    
    else {
        echo 'Фамилия может состоять только из кириллицы!';
    }

}

if(!empty($_POST['name_dear'])){
    $NameDear = $_POST['name_dear'];
    if(preg_match('/[^а-я]/',$NameDear)){

        if(substr($NameDear, -2) == "я"){
            $NameDearNew = substr($NameDear,0, -2);
            echo ' ', $NameDearNew, 'и';
        }
        else if(substr($NameDear, -2) == "а"){
            $NameDearNew = substr($NameDear,0, -2);
            echo ' ', $NameDearNew, 'е';
        }
        else if (substr($NameDear, -2) == "м" || substr($NameDear, -2) == "р" || substr($NameDear, -2) == "л"){
            echo ' ', $NameDear, 'у';
        }

        else if (substr($NameDear, -2) == "й"){
            $NameDearNew =  substr($NameDear, 0, -2);
            echo ' ', $NameDearNew, 'ю';
        }

        else{
            echo ' Не удалось просклонять Ваше имя! ';
        }

    }
    
    else {
        echo 'Имя может состоять только из кириллицы!';
    }

}

if(!empty($_POST['lastname_dear'])){
    $lastNameDear = $_POST['lastname_dear'];
    if(preg_match('/[^а-я ]/',$lastNameDear)){

        if(substr($lastNameDear, -4) == 'ич' || substr($lastNameDear, -4) == 'ыч'){
            echo ' ', $lastNameDear, 'у';
        }
        else if(substr($lastNameDear, -4) == 'на' || substr($lastNameDear, -4) == 'зы'){
            $lastNameDearNew = substr($lastNameDear,0,-2);
            echo ' ', $lastNameDearNew, 'е';
        }
        else {
            echo 'К сожалению, мы не можем просклонить Ваше отчество';
        }
    }
    
    else {
        echo 'Отчество может состоять только из кириллицы!';
    }

}

?>