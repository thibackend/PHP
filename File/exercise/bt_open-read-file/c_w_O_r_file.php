
<?php 

 echo nl2br(file_get_contents('./thi.txt',false,stream_context_create(),1));
 function thi(){
    return "thi handsome";

 }
?>
