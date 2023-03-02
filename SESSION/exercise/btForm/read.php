
<?php
session_start();
?> 

<html>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="show">
    <h3>xin chao la quy khanh!</h3>
    <?php 
    echo "Xin chao "."<strong>". $_SESSION['user']['name']."</strong> <br>";
    echo "Ten dang nhap ".'<strong>'. $_SESSION['user']['username']."</strong> <br>";
    ?>
    <button type="button"><a href="btForm.php">back to home</a></button>
</div>
</body>
</html>
