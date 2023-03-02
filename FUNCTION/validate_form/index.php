<!-- validation server: php -->

<?php 
if($_SERVER["REQUES_METHOD"]=="POST"){
    $errors=[];
    if(empty(trim($_POST["email"]))){
        $errors["name"]["error1"]="can not null in name!!";
    }else{
        if(strlen($_POST["name"])<3){
            $errors["name"]["error2"]="least 3 letter!";
        }
    }

//     if(empty(trim($_POST["email"]))){
//         $errors["email"]["required"]="Email can't NuLL!";
//     }else{
//         if(!filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL)){
//             $errors["email"]["required"]="Email isn't suitble!";
//         }
//     }
}
?>





<html>
    <body>  
    <form method="post" name="frm">
     <lable for="name" > name :</label>
     <input name="name" id="name" type="text" placeholder="name" value="<?php echo $_POST["name"];?>"><br>
     <?php if(isset($_POST["submit"]) && empty($_POST["name"])){?>
     <span style="color:red;">you didn't fill the name blank!</span>
     <?php }?>  <br>
     <lable for="email" >email :</label>
     <input type="text" name="email" id="email" placeholder="email"  value="<?php echo $_POST["email"];?>" ><br>
     <?php if(isset($_POST["submit"]) && empty($_POST["email"])){?>
     <span style="color:red;">you didn't fill the email blank!</span>
     <?php }?> 
    <br> <br>
    <input type="submit" value="submit" name="submit">
    </form>
    </body>
</html>