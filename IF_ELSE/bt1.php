<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else condition</title>
</head>
<body>
<form action="#" method="post">
        <label for="width">Enter width:</label>
        <input type="text" name="width"  placeholder="Enter width" > <br>
        <br> <label for="length"> Enter length:</label>
        <input type="text" name="length" placeholder="Enter length"> <br> <br>
        <input type="submit" value="submit" >
        <?php
            $width=$_POST["width"];
            $length=$_POST["length"];
            $area=$width*$length;
            $resoult;
            if($area>=200){
                $resoult= "building a villa!";
            }
            elseif($area >=150) {
                $resoult="building a high-rise buildings!";

            }
            else{
                $resoult= "building a house level 4!";
            }
        ?>
        <br>
        <label for="resoult ">if else condition:</label>
        <input type="text" value="<?php echo $resoult  ?>" id='resoult'>
        <br>
        <label for="resoultS"> Switch case condition: </label>
        <?php 
        $resoultS;
        switch($area){
            case($area >=200):
                $reoultS= 'building a villa!';
                break;
            case($area>=150):
                 $resoultS="building high-rise buildings!";
                break;
            case($area<=100):
                $resoultS= "building house level four!";

        }
        ?>
    <input type="text" id="resoultS" >
        <script>
            document.getElementById('resoltS').value=$resoultS;
        </script>

    </form> 
</body>
</html>