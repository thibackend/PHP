<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display name</title>
</head>
<body>
    <?php
    function EchoFullname($fullname){
        echo "Hello ".$fullname. " !";
    }
    ?>
    <form action="" method="post">
        <label for="fullname">Fullname:</lable>
        <input type="text" name="name" id="name">
        <label for="resoult">Resoult : </label>
        <input type="text" name="resoult" id="resoult" value='<?php EchoFullname($_POST['name']);?>'><br>
        <input type="submit" name="ok" value="submit">
    </form>
    
</body>
</html> 