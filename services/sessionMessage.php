<?php
session_start();

function errorMessageSet (string $errorMessage) : void {
    $_SESSION['Error message'] = $errorMessage;
}

function rescueErrorMessage () : ?string {
    if (isset($_SESSION['Error message'])){
        return $_SESSION['Error message'];
    
    return null;    
    }
}
////////////////////////////////////////////////////////////////
function successMessageSet (string $successMessage) : void {
    $_SESSION['Success message'] = $successMessage;
}

function rescueSuccessMessage () : ?string {
    if (isset($_SESSION['Success message'])){
        return $_SESSION['Success message'];
    
    return null;    
    }
}

//////////////////////////////////////////////////////////////////
function removeErrorMessage () : void {
    if (isset($_SESSION['Error message'])){
        unset ($_SESSION['Error message']);
    }
}


function removeSuccessMessage () : void {
    if (isset($_SESSION['Success message'])){
        unset ($_SESSION['Success message']);
    }
}
