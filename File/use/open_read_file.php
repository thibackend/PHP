<?php
 // cac buoc can lam :
 //1. lay link de try cap vao file
 //2. thuc hien kiem tra link do co dat yeu cau hay chua hay la link chua ton tai.

 //3. 



?>



<html> 
<body>


<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>

        <td bgcolor="#CC0066" style="text-align:center;">
        <?php
        $file='/opt/lampp/htdocs/THI24A/PHP/File/text.txt';
        if(file_exists($file)){
            $file=fopen($file,'r',1);
            if(!$file){
                echo "<br> can not open this file.<br>";
                exit;
            }else{
                echo "<font color='#ffffff'>";
                echo "<br><br>";
                while(!feof($file)){
                    $content=fgets($file);
                    echo nl2br($content);
                }
                echo "<br><br>";
                echo "</font>";
            }
            echo "successful open file!";
            fclose($file);
        }else{echo "file doesn't exists"; }
        ?> 
         </td>
    </tr>
</table>

</body>




</html>
