<?php
    $age =array("perter"=>22,"thang"=>20,"thi"=>10);
    $age["perter"]="100";
    $age["thang"]="200";
    $age["thi"] ="17";
    foreach($age as $key=>$value){
        if($key=="perter"){
            echo "$key is $value years old!! ";
            break;

        }
        echo "still run";
    }
?> 

