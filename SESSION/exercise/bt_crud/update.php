<?php session_start(); 
?>
<body>
    <h2>UPDATE</h2>
    <?php if(!empty($_GET['update'])){
        $a=$_GET['update'];
        $a=str_replace("'","",$a);
        ?>
        <form action="#" method="post">
            <p>
                id <br>
                <input type="text" name="id" value="<?php echo $a;?>">
            </p>
            <p>
                name <br>
                <input type="text" value="<?php echo $_SESSION['student'][$a]['name']; ?>" name="name" id="name">
            </p>
            <p>
                age <br>
                <input type="text" name="age" value="<?php echo $_SESSION['student'][$a]['age']; ?>"  id="age">
            </p>
            <p>
                specialize <br>
                <input type="text" value="<?php echo $_SESSION['student'][$a]['specialize']; ?>"  name="spe" id="spe">
            </p>
            <input type="submit"  value="update" name="update">
        </form>
        <?php } ?>
    </body>
<?php 
// lam sao de sua luon ca Id ma van khong tang them du lieu o session   ===?

//=== > this is solution
// chung ta co the edit ca id bang cach:
// gan cho id cu vao mot bien.
// so sanh id cu va id moi: 
// neu id cu khac moi thi thuc hien lenh xoa du lieu cu va chen vao du lieu moi voi id moi luon.
// neu id cu giong id moi thi bat day truc tiep len ==>> vi session se tu biet duoc.
?>
