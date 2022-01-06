<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <p>Registration Form</p>    

    <form action="script.php" method="post">
        <?php
            $errorMessage = isset($_SESSION['Error message']) ? $_SESSION['Error message']: '';
            if(!empty($errorMessage)){
            echo $errorMessage;
            }

            $successMessage = isset($_SESSION['Success message']) ? $_SESSION['Success message']: '';
            if(!empty($successMessage)){
            echo $successMessage;
            }
        ?>
        <p>Your name: <input type="text" name="name"/></p>
        <p>Your age: <input type="text" name="age"/></p>
        <p><input type="submit" value="Send"/></p>
    </form>     
</body>
</html>


