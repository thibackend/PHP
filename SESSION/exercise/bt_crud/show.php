
<?php session_start();?>
<html>
    <body>
        <table border='1'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>specialize</th>
            <th>action</th>
        </tr>
        <?php
        if(!empty($_SESSION['student'])){
         foreach($_SESSION['student'] as $key=>$value){?>
        <tr>
            <th><?php echo $key?></th>
            <th><?php echo $value["name"]?></th>
            <th><?php echo $value["age"]?></th>
            <th><?php echo $value["specialize"]?></th>
            <th><a href="show.php?delete=<?php echo $key?>" onclick="return confirm('Are you wanna Delete!')">delete</a> <a href="update.php?update='<?php echo $key ;?>'">update</a></th>
        </tr>
        <?php }
        }else{?> 
           <td style='color:red;' colspan="5" style="border:none;">SESSION has no data !</td>
            <?php
        }  
        ?>
        </table>
        <button><a href="data.php">add data</a></button>
    </body>
</html>

<?php if(isset($_GET['delete'])){
    unset($_SESSION['student'][$_GET['delete']]);
    header("location:show.php");
} 
?><?php 
if(isset($_GET['update'])){
    header('location:update.php');
} ?>
    </body>
<?php ?> 
