    <?php

    $array=[
        "1"=>"thi",
        "2"=>"thang",
        "3"=>"son",
        "4"=> "thien"  ];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["name"];
        array_push($array,$name);
        if(in_array($name,$array)){
            $result="founded";
        }else{
            $result="not Found";
        }
    }
    ?>
 <html>
    <body>
        <form action="#" method="post" class="form-control">
        <label for="name">Name</label>    
        <input type="text" name="name" id="name">
        <p>result: <?php echo $result; ?></p>
        <br>
        <input type="submit" name="submit" value="find">
        </form>
    </body>
 </html>                                                                                                                       
 <br>