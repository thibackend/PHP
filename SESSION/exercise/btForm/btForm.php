<?php
//các bươc làm:
//1. thiết kế form include: name, email, ursername, password
//2. lấy dữ liêu từ các form bỏ vào một array session.

//3. thực hiện gán các dữ liệu cho phần in ra.

session_start();

if ( isset( $_POST[ 'submit' ] ) ) {
    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    $_SESSION[ 'user' ] = [
        'name'=>$name,
        'email'=>$email,
        'username'=>$username,
        'password'=>$password
    ];
}
?>
<html>
<link rel = 'stylesheet' href = 'style.css'>
<body>
<center>
<form method = 'post' class='frm'>
<h1 class = 'title'>LOGIN INFORMATION</h1>
<table>
<tr><th><label for = 'name'>name:</label></th>
<th>
<input type = 'text' name = 'name' id = 'name' value = <?php if ( isset( $_POST[ 'submit' ] ) ) {
    echo $_POST[ 'name' ];
}
?>>
</th></tr>
<tr><th><label for = 'email'>email: </label></th>
<th><input type = 'text' name = 'email' id = 'email'value = <?php if ( isset( $_POST[ 'submit' ] ) ) {
    echo $_POST[ 'email' ];
}
?>></th></tr>
<tr><th><lable for = 'loginname'>username:</label></th>
<th><input type = 'text' name = 'username' id = 'loginname' value = <?php if ( isset( $_POST[ 'submit' ] ) ) {
    echo $_POST[ 'username' ];
}
?>></th></tr>
<tr><th><label for = 'password'>Password: </label></th>
<th>
<input type = 'password' name = 'password' id = 'password' value = <?php if ( isset( $_POST[ 'submit' ] ) ) {
    echo $_POST[ 'password' ];
}
?>></th></tr>
</table>
<br>
<br>

<input type = 'submit' name = 'submit' id = 'submit' value = 'Login'>
</form>

<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    if ( isset( $_SESSION[ 'user' ] ) ) {
        ?>
        <div class = 'show1'>
        <p>Hello <?php echo $_SESSION[ 'user' ][ 'name' ];
        ?></p>
        <p>Email: <?php echo $_SESSION[ 'user' ][ 'email' ] ;
        ?> </p>
        <p>Login name:<?php echo $_SESSION[ 'user' ][ 'username' ];
        ?></p>
        <p>Password: <?php echo $_SESSION[ 'user' ][ 'password' ];
        ?></p>
        <br>

        <p><button><a href = 'read.php'>click</a></button></p>
        </div>
        <?php }
    }
    ?>
    </center>
    </body>
    </html>