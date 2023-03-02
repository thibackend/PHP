<?php

// bước đầu khai báo 
    session_start();
// tại sao phải  gọi SESSION_START(); BƯỚC ĐẦU..??
// lý do: =>trước tiên hàm này kiểm tra xem một phiên đã được bắt đầu chưa 
// và nếu chưa có phiên nào được bắt đầu thì nó sẽ bắt đầu một phiên

// cách đăng ký một session dùng function:

$_SESSION["student"]=[
    "name"=>"thi",
    "age"=> 12,
    "gender"=>"male"
];

if(isset($_SESSION["student"])){
}else{
    echo "session wasn't set!";
}
echo "<a href='read.php'>detail</a>";
?>