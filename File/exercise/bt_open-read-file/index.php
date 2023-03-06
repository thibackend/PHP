<?php 
if(isset($_POST['file_name']) and isset($_POST['content']) and $_POST['sm']){
    $name_file=$_POST["file_name"];
    $file_w=fopen($name_file,"w");
    $content=$_POST['content'];
    fwrite($file_w,$content);
    fclose($file_w);
}
?>
<html>
    <body>
        <center>
        <form action="index.php" method="post" class=">
            <input type="text" name="file_name" value="<?php echo $_POST['file_name']?>" placeholder="enter name file" > <br>
            <textarea name="content" id="content" cols="30" rows="3" placeholder="enter content" value="<?php echo $_POST['content']?>"></textarea>
            <br>
            <input type="submit" value="done" name="sm">
        </form>
        <?php 
        if(isset($_POST['sm'])){?>
        <div class="show">
            <?php 
        $file_r =fopen($name_file,"r");
        while(!feof($file_r)){
            $data=fgets($file_r);
            echo nl2br($data);
        }
        fclose($file_r);
        ?>
        </div>
        <?php } ?>
        
    </center>
    </body>
</html>