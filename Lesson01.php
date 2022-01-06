<?php 
    $categories = [];
    $categories [] = 'Children';
    $categories [] = 'Youngers';
    $categories [] = 'Adults';

    //print_r($categories);

    $name = 'Gus';
    //var_dump($name);

    $age = 26;
    //var_dump($age);

    
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
