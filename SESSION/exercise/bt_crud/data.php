
<?php 
session_start();
if(isset($_POST["add"])){
    $key=$_POST['id'];
    $a=[
        "$key"=>[
            "name"=>$_POST['name'],
            "age"=>$_POST["age"],
            "specialize"=>$_POST["spe"]
        ]
    ];
    foreach($a as $k=> $v){
        $_SESSION['student'][$k]=$v;
    }
    header("location:show.php");
}
?>

<html>
    <body>
        <form action="#" method="post">
            <p>
                id <br>
                <input type="text" name="id">
            </p>
            <p>
                name <br>
                <input type="text" name="name" id="name">
            </p>
            <p>
                age <br>
                <input type="text" name="age" id="age">
            </p>
            <p>
                specialize <br>
                <input type="text" name="spe" id="spe">
            </p>
            <input type="submit" value="add" name="add">
        </form>
    </body>
</html>