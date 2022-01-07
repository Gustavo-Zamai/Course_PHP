<?php
    function nameValidation (string $name) : bool {
    if (empty($name)){
        errorMessageSet ('Name cant be empty!');
        return false;
    }

    else if (strlen($name) < 3){
        errorMessageSet ('Name must contain 3 characters!');
        return false;
    }
    else if (strlen($name) > 35){
        errorMessageSet ('Name is to lengthy!');
        return false;
    }
    return true;
}


function ageValidation (string $age) : bool {
    if (!is_numeric($age)){
        errorMessageSet ('Invalid age!');
        return false;
    }
    return true;
}

