<html>
    
    <body>
        <form action="index.php" method="post" name="frm" class="frm">

            <label for="namefile">
                namefile : <input type="text" name="namefile" id="namefile">
            </label><br>
            <label for="txt_content">
                TextContent : <textarea name="txt_content" id="txt_content" cols="30" rows="10">
                </textarea>
            </label><br>
            <br>
            <input type="submit" value="Tao" name="Tao">
        </form>
    </body>
</html>

<?php 
if(isset($_POST["Tao"])){
    if(!empty($_POST["namefile"]) && !empty($_POST['txt_content'])){
        $namefile =$_POST['namefile'];
        $content =$_POST['txt_content'];
        // $file=fopen("$namefile","w");
        // fwrite($file,$content);
        // echo "successful write file";
        // fclose($file);
        echo "the file you want to create is : "."
        $namefile <br> and content we have: $content <br> <br>";

        if(file_exists('huu.txt')){
            $content=fopen('./huu.txt',"r");
            while(!feof($content)){
                echo nl2br(fgets($content));
            }
            echo " <br> <br>the file existed";
            fclose($content);
        }else{
            echo "this file doesn't exist";
        }
        
        // while(!feof($content)){
        //     echo nl2br($content);
        // }
    }
}
?>

