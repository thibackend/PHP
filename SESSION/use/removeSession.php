<?php
session_start();


// cách xóa một session ta có thể dùng hàm : session_destroy();
// với cách xóa này -> xóa hết tất cả các session có trong hiện tại. 


// >>>>>>>>> chúng ta có thể dùng unset($_SESSION['agument'])


$_SESSION["name"]["thi"]="thi handsome";
$_SESSION["name"]["thang"]="thang đẹp trai";



echo"<pre>";
print_r($_SESSION["name"]);
echo "</pre>";
?>