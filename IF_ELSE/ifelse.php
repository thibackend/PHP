<html>
<body>
<?php
$mong= "mong3";
print("<br>part if else !!! <br>");
if ($mong== "mong1"){
    echo "visit papa";
}
elseif ($mong== "mong2") {
    echo "visit mama";
}
elseif ($mong== "mong3") {
    echo "visit teacher";
}
elseif ($mong== "mong4") {
    echo "visit BO";
}
elseif ($mong== "mong5") {
    echo "selt_sleep";
}
elseif ($mong== "mong6") {
    echo "On Xe";
}
else{
    echo " I am learning at PNV";
}


print ("<br> part switch case !!! <br> ");
switch ($mong){
    case "mong1": 
        echo "visit papa";
        break;
    case "mong2":
        echo "visit mama";
        break;
    case "mong3":
        echo "visit  teacher";
        break;
    case "mong4":
        echo "visit Bo";
        break;
    case "mong5":
        echo "selt_sleep";
        break;
    case "mong6":
        echo "On xe";
        break;
    case "mong7":
        echo " I am learning at PNV";
        break;
}

?>   
</body>
  
</html>

