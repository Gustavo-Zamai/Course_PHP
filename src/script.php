<?php
    $categories = [];
    $categories [] = 'Children';
    $categories [] = 'Youngers';
    $categories [] = 'Adults';
    //print_r($categories);
    $name = $_POST['name'];
    //var_dump($name);
    $age = $_POST['age'];
    //var_dump($age);
    
    //validation of $name
    if (empty($name)){
        echo 'Name cant be empty!';
        return;
    }

    if (strlen($name) < 3){
        echo 'Name must have contain 3 character';
        return;
    }
    if (strlen($name) > 35){
        echo 'Name is too lengthy';
        return;
    }

    //validation of $age
    if (!is_numeric($age)){
        echo 'Invalid age';
        return;
    }




    if ($age >= 6 && $age <= 12){
        for ($x = 0; $x <= count ($categories); $x++){
            if ($categories == 'Children'){
                echo 'The athlete '.$name.' will play at '.$categories.'.';
            }
        }
    }else if ($age >= 13 && $age <= 18) {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Youngers'){
                echo 'The athlete '.$name.' will play at '.$categories.'.';
            }
        }
    } else {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Adults'){
                echo 'The athlete '.$name.' will play at '.$categories.'.';
            }
        }
    }
