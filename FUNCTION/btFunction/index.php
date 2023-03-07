<?php 
 function sum($a=0, $b=0){
    $sum =$a + $b ;
    return $sum;
 }
function validate(){
    $errors=[];
    if(empty($_POST['a'])){
        $errors['a']="need to fill the first number";
    }
    if(empty($_POST['b'])){
        $errors['b']="need to fill the second number";
    }
    return $errors;
}
if(isset($_POST["sm"])){
    $errors= validate();
}
?>


<html>
    <body>
        <center style="background:green; width:300px;">
            <form action="index.php" method="post">
                <h2  style="background:violet;">SUM OF TWO NUMBER</h2>
                <label for="a">
                    <input type="number" name="a" id="a" value="<?php if(isset($_POST['sm'])){ echo $_POST['a'];} ?>" placeholder="enter the first number"> First Number <br>
                     <small style="color:red;"><?php if(isset($_POST['sm'])){echo $errors['a'];} ?></small>
                </label>
                <br>
                <label for="b">
                    <input type="number" name="b" value="<?php if(isset($_POST['sm'])){ echo $_POST['b'];} ?>" placeholder="enter the second number" id="b">Second Number
                 <br>   <small style="color:red;"><?php if(isset($_POST['sm'])){echo $errors['b'];} ?></small>
                </label>
                <label>
                    <br>
                    <input type="submit"  name="sm" value="TINH">
                </label>
            </form>
              <div class="show">
              
                <?php if(isset($_POST["sm"])){
                       if(empty($errors)){
                ?>
                      <h4>ket qua: </h4>  
                <?php
                    echo sum($_POST['a'],$_POST['b']);
                }}?>
              </div>
        </center>
    </body>
</html>