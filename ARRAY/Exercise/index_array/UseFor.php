<?php
$sp =array("khoai","sắn","ngô");
foreach ($sp as $k=>$v) {
    echo"key=>". $k."value=>".$v."<br>";
    if($k==2){
        echo "value:".$v;
    }
}

?>