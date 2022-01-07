<?php
include "services/athleteCategory.php";
include "services/sessionMessage.php";
include "services/validation.php";

    $name = $_POST['name'];
    //var_dump($name);
    $age = $_POST['age'];
    //var_dump($age);

defineAthleteCategory($name, $age);

header ('location: index.php');