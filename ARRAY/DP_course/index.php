
<?php 

    $course =[
        "Frontend"=>[
            "title"=>"Fronent course",
            "fee"=> 12000000
        ],
        "Backend"=> [
            "title"=> "PHP-MYSQL",
            "fee"=> 1680000
        ],
        "fullstack"=> [
            "title"=> "PHP-MYSQL-html-js",
            "fee"=> 1680000
        ]
    ];
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>display course</title>
</head>
<body>
    <form action="" method="post">
    <table border="1">
        <tr>
            <th>course</th>
            <th>title</th>
            <th>fee </th>
        </tr>
            <?php
            if(isset($_POST["submit"])){
                foreach($course as $key =>$value){
                    ?> <tr>
                    <th><?php echo$key;?></th>
                    <?php foreach($value as $vl=> $valu){?>
                    <th><?php echo $valu;?></th>
                    <?php }?>
                </tr>
                <?php
                }
            }
            ?>
    </table> 
     <input type="submit" value="ok" name="submit">
</form>
    <form action="" method="post">
      
    </form>
    
</body>
</html>








 