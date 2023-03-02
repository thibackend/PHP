<?php 
function validation(){
    if(empty($_POST["name"])){
        $errors["name"]="didn't enter the name!";
    }if(empty($_POST["email"])){
        $errors["email"]="didn't enter the email!";
    }
    if(empty($_POST["loginname"])){
        $errors["loginname"]="didn't enter the loginname!";
    }
    if(empty($_POST["password"])){
        $errors["password"]="didn't enter the password!";
    }
    return $errors;
}


 if(isset($_POST["submit"])){
 $a=validation();
 if(empty($a)){
    $value=serialize([
        "name"=>$_POST['name'],
        "email"=>$_POST['email'],
        "loginname"=>$_POST['loginname'],
        "password"=>$_POST["password"]
    ]);
    setcookie("infor",$value);
$getdata=unserialize($_COOKIE["infor"]
);
 }
}
?>

<html> 
    <link rel="stylesheet" href="style.css">
<body> 
<center> 
<form method="post" class="frm"> 
<h1 class="title">LOGIN INFORMATION</h1> 
<label for="name">name:</label>
<input type="text" name="name" id="name" value=<?php echo $_POST["name"];?>>
<br> 
<?php 
if(isset($_POST["submit"]) && empty($_POST["name"])){ 
    echo "<span style='color:red;'>".
     $a['name'].
    "</span><br>" ;
}
?>                  
<label for="email">email: </label>
<input type="text" name="email" id="email"value=<?php echo $_POST["email"];?>>
<br>
<span style="color:red;"> 
<?php echo $a["email"]; ?>
</span><br>    <br>       
<lable for="loginname">login name:</label>
<input type="text" name="loginname" id="loginname" value=<?php echo $_POST["loginname"];?>>
<br><span style="color:red;"> 
<?php echo $a["loginname"]; ?>
</span><br>    <br> 
<label for="password">Password: </label>
<input type="text" name="password" id="password" value=<?php echo $_POST["password"];?>>
    <br> 
<span style="color:red;"> 
<?php echo $a["password"]; ?>
</span><br>   
<br>
<input type="submit" name="submit" id="submit" value="Login">
</form>
                <div class="show">
    <p>Hello <?php echo $getdata["name"];?></p>
    <p>Email: <?php echo $getdata['email'];?> </p>
    <p>Login name:<?php echo $getdata["loginname"];?></p>
    <p>Password: <?php echo $getdata["password"];?></p>
    <br>
    <p><button><a href="read.php">click</a></button></p>
</div>
</center>
</body> 
</html>