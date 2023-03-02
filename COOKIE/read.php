<html> 

<body>
    <?php $getdata =unserialize($_COOKIE["infor"]) ;?>
    <center>
    <h4 style="background:red;width:fit-content;">WELCOME TO WEBSITE!!</h4>
    <div class="show">
    <p>Hello <?php echo $getdata["name"];?></p>
    <p>Login name:<?php echo $getdata["loginname"];?></p>
    <p><button><a href="btForm.php">back</a></button></p>
</div>
</center>
</body>
</html>