<?php
    session_start();
    
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
        $_SESSION['Error message'] = 'Name cant be empty!';
        Header ('location: index.php');
        return;
    }

    else if (strlen($name) < 3){
        $_SESSION['Error message'] = 'Name must contain 3 characters!';
        Header ('location: index.php');
        return;
    }
    else if (strlen($name) > 35){
        $_SESSION['Error message'] = 'Name is to lengthy!';
        Header ('location: index.php');
        return;
    }

    //validation of $age
    else if (!is_numeric($age)){
        $_SESSION['Error message'] = 'Invalid age!';
        Header ('location: index.php');
        return;
    }


////////////END OF VALIDATION//////////////////////////


/////////////////////////////////////////////////////
    if ($age >= 6 && $age <= 12){
        for ($x = 0; $x <= count ($categories); $x++){
            if ($categories == 'Children'){
                $_SESSION['successMessage'] = 'The athlete '.$name.' will play at '.$categories.'.';
                header ('location: index.php');
                return;
            }
        }
    }else if ($age >= 13 && $age <= 18) {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Youngers'){
                $_SESSION['successMessage'] = 'The athlete '.$name.' will play at '.$categories.'.';
                header ('location: index.php');
                return;
            }
        }
    } else {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Adults'){
                $_SESSION['successMessage'] = 'The athlete '.$name.' will play at '.$categories.'.';
                header ('location: index.php');    
                return;
            }
        }
    }
