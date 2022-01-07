<?php
    
    function defineAthleteCategory (string $name, string $age) : ?string {

    $categories = [];
    $categories [] = 'Children';
    $categories [] = 'Youngers';
    $categories [] = 'Adults';

if (nameValidation($name) && ageValidation($age)) {   
    removeErrorMessage(); 
    if ($age >= 6 && $age <= 12){
        for ($x = 0; $x <= count ($categories); $x++){
            if ($categories == 'Children'){
                successMessageSet ('The athlete '.$name.' will play at '.$categories.'.');
                return null;
            }
        }
    }else if ($age >= 13 && $age <= 18) {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Youngers'){
                successMessageSet ('The athlete '.$name.' will play at '.$categories.'.');
                return null;
            }
        }
    } else {
        for ($x = 0; $x <= count($categories); $x++){
            if ($categories == 'Adults'){
                successMessageSet('The athlete '.$name.' will play at '.$categories.'.');
                return null;
                }
            }
        }   
    }else{
        removeSuccessMessage();
        return rescueErrorMessage();
    }
}

