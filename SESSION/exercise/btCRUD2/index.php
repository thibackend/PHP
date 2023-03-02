<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

    <h1>Danh sách Admin</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php 
        $a =$_SESSION['student'];
        if(!empty($_SESSION['student'])){
            foreach($a as $key=>$value){
        ?>
        <tr>
            <th> <?php echo $key ?> </th>
            <th><?php echo $value["name"] ?></th>
            <th><?php echo $value["email"] ?></th>
            <th><?php echo $value["password"] ?></th>
            <th><a href="update.php?update=<?php echo $key ; ?>">update</a> <a href="update.php?delete='<?php echo $key ?>'"> delete</a></th>
        </tr>
        <?php
            }
        }
        ?>
    </table>
    <button>    <a href="add.php">add data</a></button>
</body>
</html>