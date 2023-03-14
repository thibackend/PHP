
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="test.css"> -->
</head>
<body>
    <div class="contarner">
        <div class="left-conten">
            <h1>them</h1>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFhYZGRgYGhgYGRkaGhocGhoaGBgaGRgaGhwcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQrJCE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NTQ1NTQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAACBQEGB//EADcQAAEDAgQEAgkEAgIDAAAAAAEAAhEDIQQSMUEFUWFxgZEGEyIyobHB0fAUQlLhkvFygiNisv/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACURAAMBAAICAgIBBQAAAAAAAAABAhEDIRIxQWEEUSITcZGh0f/aAAwDAQACEQMRAD8ATcqOVnnVeorcBogPOSoTTzBjc5nExTa7M21rk+6D5rke/B6n48cdPeRvPo85hnyYTjUbFcIy4b1wBbUDs5Y4gkUy5zGtI1kENJcQLHpaYjB0mublxLXMc5oJGXM0H3nG9wI5Kf5fJvX4kVW8b67Xffa/t/oGoCi4zh4Y1zhiWOAa57W2zOF8kXvmteL7a2ti8ExtM1G4lrhBAECS4XLRe8AiwG86I7IX4u5lLv6f/AQKsER+DpScuLbtE5TFrzBv4adUFogkZg8AkBzdHAHUJMz5ODwndChdXAupHOSVFFEgOFSVEfDYN7/cYT128zZMAK4U4/hz265e2YSk6gyzNo5oTTDCpVSl8NxGlUJDHtcRcgHbmmITzA3ThXCuwoUMCqigCkIAqVQlEIQ0DKFRQqJiJKhUUSA4ouyogYs4Ib9umnTsiPQnKqlM04PyL4Xsv2WpahOBg5DyCRYbhaAKnxSK5PyeTketnRTb/EeQXRSb/EeQXQuhGEf1K/b/AMk9U3+I8grtAFgFUFWCCXdP2woK7mQ2qwQSWlQLkJjB4V9R2Vgn5DuUgH+EcNDwXvnIDEDUn7LTxBeWwxsNGgEBo8U7hcKGMDTowSeRdqT2Xn+L8UJJDdCIA5WWPLWIviXlXSEsbVewEu8dI8wsTiOGq4phpUnta5xHvEtBaNWkgGP6Rn4p9xqDY7/BW4Q14fmbTeeRykC/VZRTl+SOjklVLTAejnoNWovL3vpl0Foa1xIE6kktHIL0DuDVJ/afGycpPeB7hnqQhYnFYkH2KObs+mB8XStXz1TOVQpWIVfweqNgf+wS9XA1G6sPhf5L0DKrywFwLHbtMGP8ZCpndt+eCT5mvgak8yRGtlUr0dXD5vev3WZXwI/bbobhXPKmJrDOJVHFFq0y03EIbgtRAiorEKpTAkKKKQgCsrqmVdS7AWehuRHobloQU3Wgw2WeU7SNgpZSDtXQqgroUlFgrKgKtKALNKuCqMaSQAJJsBzXo+FcANn1rDUM3P8Ay5IJdJCnC+EPqnMfZZudzzAXqKNNrRkYIA1j5k7lWqV2sECI0AGyzq3E9rBY1S9EpOjSqRkLSZkQs6hw+iA5zmh5n92nks7E8YykzaPr/tCZxuGFwaSJMkdlH8m/Xo0ScrN9mk90WYwAHYNA+SGXu3WBW9IzMXHnoNUrW9I8pDTOY+ahzT+DRYelc4qnriAvLVePGA4ixEifzuiUfSBoEkidr/nXySXHX6Bs3H4sgxP5uu1caWiyymceGlvNEbxcG5LQOoH4UeDAK/HPOkldZRe8zdUZxdk6jyCMOMtP5CPQDX6QRDgFlYzC5btMjluPunv1wd+4BDrPkXHkrimmS0YxVUWsyChBdSZBFyV1chMDqi4ogBdyo5WcUJ5VkFXJrDv9lZtbENbqQqM4vTaImSk0xo28ymZYFTj4/a0lLP4086QElFFNo9RnVqJL3tY27nEAAarxpxlR7g0ElziAANSSYAC+s8B4MzAUs7/arvHtvN8u+RvIDnula8FrF5fCNTC4WnhmDQvi7jrO4HIJTE8ZSL65fLnHewXKWFLzfTpsVyKq5KxFKVK2gFTE1HuAFp0J6/XVaHAeDl5z1STBPs7SDC1WYBoYJ2j4JzDvAYSu/j4Jl6zGuVtYjI43TpBplgNuXgszF4ljKLWNAAMWjmLqcexUvA218gsDiuKLstrSf6Suu3hUT0tNCpimudoNI02lK4cNfWzFoOXePJKUTDZOv3/2meHOyyslrNOkF4uG5LgafJeYfhc5sLNEc/z+lu8TqZh1+ivw5zQ3MVWC08/W4aWASLzMbePNJVaL5mSV6rF4hrjMSdrLPfQLpJCTDs88WFcNYjRxHiVo16J5QEhVZy80JIehMPxiow3Mjqb+a3+H8Yz6EjoV5Ko3omOHE5u2im4WaVL+D27jm79EBK4CuSOoTj+Y3+amK3oVLDi4ootSSKK3q3fxPkVE8YtQB+Gf/B3+J+yXfTd/E+S+lnHHeyC/FHotWp/ZltHx7iuFcXTp3WY3DOmMpX2ysWvs9rXDkWgpdmDww0os/wAU1UoP5HyNmAedoTLOFnc+S91xDgDDLqfs/wDqdPBZVDhj3PbTghzyGi1hOpUu2Vho+gfAKbJxTxIYSGTu7Qu8NB1W1iK5rPJPuj8ARuKvaxrKDPdYA3uUCiwgZRfmYXm/kctXXjJvxSpXkw2Ewpfpa61mYZrLmAVzB0yxgm68X6RcfrveadIaSCQCTbWAF28HEon7Mbp0/o9pW4g2IlLMxksLeUr41iuK12Pj1hJ3vuvS+i3pA51RtOpq6zXdeRWzdeyUp9I9TUpZ3SRtZY3FaUOAjb6L1ow2Uysr0iwpBa6NyPgFDnrSprvDzldsCJ6/CPql214MLuPdBjePrKXw7CdkpkbYw90i64/GMaPbcABssjjXE8nst94rBIc6XOJ5krTxIdYe0pcUok+/9gnWVGOFrg8jK+ah907QrvYczSQRtOqVcY55NPZYljOTvFZr8KSZaPGIAVcNjy8Ak+K0cPVaOqxpNM1XZj1OHu1iewVcHRIOi9KKjSkcU2RPLRTWtFIb4TTuZTrqew8ElwauCfBPYt+/5queW5squ0bOA9GXvgvcGA7C7vsF6LA8GpU/dZJ/k65/rwWN6McZB/8AE8/8Cf8A5n5L0dTEgL1uJS51I83lqlWMLkUSf65q4tjLsxqlRUa4kfJcgDUEqjng6EdiuE7yprEWKjK43VXVPDvp5oJ15JAFdUHJP8Oysa+rF2iGnqeSy3mLFOYt4bh2gfuJPlZZ8teMtoJnypIDhWl7y43v8SvQtphjeqy/R6gSC4jTRbdVyj8biyfJ+2Xy1teK+DCx2NfDgAQOa83XxrBSY+n7NSazXuFnRmGUHplPwK9lVwmeQd1kn0Togl2Z1zJANl1TqM6xrEfGsXJeZmcxB7ytzheFJq08oJdnYR0giSvoFb0RwjjOQh3MOPgtnhHCMPQEsYM38jd3mVTpVhEy57ZsnKGhzosB5rB4rjswIACzPS30gyP9W2bATHW68y/jgLfyyi6+EaxxvPJjeOotc6+qsWNayAsyljc55p8Emyjspo8Txpv/AJ76RIQ6plhaNrr2GM4AKwH7XDR3Lv0WafROvPvsjndaK119Gbl9nj4uBunqXzXp6HoWAZdU/wAR91qYPgFCneC5w3df4aJ1ypinja9mVwXhJyAu0+a2jw9oEJpz4VH1p3XO229N0kkZlZmTfwS1R0iU1i78lmEwqwnSmHqllQXsVv1Hy09vqvL4kra4dVzMHZY3ONMtPoYw9aIPK8r07OKFzBud+4XkGOgwtDBV9lfFdS8/ZFwn2bv6w8gokfXM5qLfyZl4o0nP5nsQqvHUHugB/krMOx02QwKucQdDHLVdjl5FDeY0kfJVFR3QqWAUvFrW+IRuIPGSmNo+ZSoabzui4lhLWdGgfFY8utYa8fvT03CmBtMI5dzVaBAY3sgtfJXTKxJGL7bYy07peoJNz2ATjadrrhto1W50lVgk2mANEZrJBQKocTcx0XX12tbrKlLC9PE+keCDapeT7Lg4Gb/tMfEBeNx7ZZlZq4gDtK+g8beHgiJCw+F4JgOYgEgmPMqH09OiKXg0zno/wQsbmebxdNGGnsnX1/ZMWWbVrAa7qXrI0cpY0Kz8W2LG6x3HkUEVI1lLxDcNM4sqfquazS+VwVY10R4h5Gg6o3mhVHxuhF4doUJzOqMDS7nhZ2JF5hNubA1SWLeYTQhWronuCPsRyPzSYcIR+Dv9tw7fVTa/iOR2p75VmV4IHNUxbocUphH5320bbxURPehT6NnOeaip6s8iotyDfqwFSnUgQuPeSb9bqtN8H6qsJCNed9Cql7J08UMsMoDipY0N1AZjN4IzngMZabkX7ys57zqmqLS9lrnNPn/pYcvo0j2endiAWNgo+DEmBosrDDKIJ022803h68+7p8F0cdauzO5NqrWDRa6UqOJuSrl+YW80niWHcytjFC+IqgTfuszEYoXK7jHanyXjvSPiJY2Ab91DRrODPFeNMYTLpPIJPhXGGPsDBk25jVeJqvLnEndbPCaYYwP3OnZOpSRpxt1XivR652LHgsrF8QP7RHXdAp15QMS2L7H4HkVKn9nQomSpxr5uU3h8XNispzpV2GCm5QNp9M22neFdrgdUDCVLJksBuFkc7WMG6gNQUrVe9vZOhy7VpBwQAizEc7rlQAqr6BaVdh5oARqNIMI3BR7brbD6ruILPHxTHCmAZnRH9KbfQ5A8bxJa4AakI3CaeUdSkcS7PVPJsDy/tbOBp/30HJVKxJGbesav/JRMZW9fJRUMedSvcqPsLCQqvqHuEIOGxjoVRIQO/ifAoYAJ68lGjMY0PMaK2bYe9/LZQyirQG+8fBO4OsZgwAYgDpzKznVRBj3tzv4KmHqFsF3gNz3UV2Uj01YjLe3ZUwtQkwNOSVoYxtQXseqsA5kkHVZqmmW5TR6BkxZDxoJESgYDFSLo9S4sumb6MHPZ5XHh4JjkV4LjrH5iSTdfVcRQ8Vg8R4Q182un5FSkfLnsIHVbXBqgew059tslo/k3eOo5clp1+DZyWhtx0+M7LzuJwL6T9YvYg3kfIq0/JFynFeSNMsIPJFYSPryKJhH+tb7VnjU/y69CgVpYYISOluXOo7UYDoIPwSr3QnWAnorfpA7VI56orgMRJhawO6z2YMAggQtBlgpZLrWWMbqpeqVCYSbnkaKBDdR4Oqz6vQyEQvnZUyRdAwLae6dr1RTp9TYd1yhTHvHZZuOql74/aNPqpU+VfSCniDcOp+ZvPdejwdGw/O5WVw+lb59l6HCDRaMhBPVDqonvWdFFIzNybtK62TYjxQKLiTE6phzy32Znn1VsSI1zdrD4lVrPkcgEJ7p1b5K1ClJsCTsOXUqGykierNjEuOg+pWrhsK2PaEk6o2Go5RpfcpkMnVY1W+jWZz2KO4eD7pLTtC66hUAAjN1H2laTGRrcc0VoGylD0yKD3tN2OHgVrUKoIv8AZRzigVXKpeENaMVGgpLE0p7KoxBbvZFZUDt1oqF44JMpwx4DbydNTaRP5svHY70be9xe57W9Lkhe+rtMQNPis7EYYR81poJ4sPKcI4WGOIe4OaSLjkJJB5bKrsK31jyT7AJyA/fkFsuwwEwlK1IJqxv6M4U5MjRFFMIhAal31rwEOtM8CFt1QmNCq5nbA+S4+m8/tjqpbBI4+qUq591x9F8xdULXC2UkqdKSDNcuPrNBQTSef2wln4V83lGaPTuOxTohviuYBubVBqMIsn8DTAWiSS6M3rZs4VswAt3B0rLN4fQkSt2iyLKWMt6pdRVEhnnGuy2GvNQuuT1QwJKI+mSQOf1VtiSD4f2iBf7rcw1ENHXdZ2DoFokAybX+aco1yDBXPVb0azI+13RdXGOlXc1Z4UEal6pLTY+CNSfzQ67gVWdCKsqTuuVKZO6XqtLTLSuiofPdGhgQYTqqeqI0+BVn1XC+yCa0nfwBRoYxh2JIbcSg+sDmnpzQ3EbuAKJTptI9pwPaPuqVEuTIr4hoSj8O+oYYJnfYdyvRNp0QZDAT1EquJxFoFo2mAq80HizFp8Da333ZiOZt8EyMIxvuMaLXUr1YIEMJ1JLtI0Xf1Nrlu2hv5lTujwBUwgO8H4JVuFeAZA7m6adWedxA2sT3VnvJ38YKrRYZNakdhJ+CWLHLXqtzb+X+ku6hIsZ7/wBBAzLc1w1QXvdyWg+kTyQK1Ij8CE8E0ZFcEXKf4Ywb6JfGugRqtDhVDMByWifRm12bOBnsvQ0B7MndZGHw8Fb1NnstSGDhRGgKKsDUeZwWEc9blLh4beLrQwmFDBoivCyqtKSMTFtc3TSbfZUY8Ps4XWpVYHDxWdiqOUhw216xP3WeGiY1RbCI56Vo1Q4SEQGUNCOl5Q3vM3RGgIhbKWD0Cwg2kFUrmNER1IyhPoc0wKMqZuZjlP0RCx2wnzTOGAGgR6lRw0CWBpkVKLzqQJ2+ipToxNh3vC0alR5/YCfzkh1KLj715/aCSEYGme85nNY0OJt7QB21udFTHUWsy5s1yBa0dCdCtqjSIHuZdh17rlUFx0EdeapSLTztbBUjNzJtaRr21KSxfDAIyVHN5l0EBehxFVwnI2/55pc1C0Q5sk/FA9POP4dXF21GO87ojG4kWLJ8RC1KlNjtnMJ5ALj8EItUeOzgPomLRGoyqLlhnoR90scWZhwc09U4MK9psXOHU/h+CO4yIJAPUOQG6ZrqnUqj6s6rTdT5QfL6pd+HI+0f2gOjCxzJFgtXgjScqDiaZg2TXAn+0G9VpL6IpHqqdG4C0c9oCToXDij0Sqn2Sw+ULiJkKi1IGHlK5tQi1Hcykn1gHQd9FyP2bIj3QJS2JMtKj6l4PNAq1CCeuiQyvD3hw0gtMJ8sC89ReWYiCbPEg/MH83W+wyE2gIwbIgCkXldU4GlXyEMPlMFkhUpUr3RnY9K02QUUv2RgwaK7MMOStS2Q6wAzD5ruJ7I7acCBYJtlFXLIC0UJEOhF7IVX0JGqZc1ca4AXQkg1iAwYmTrsgvpMBlM18VeAkqxLjG26Wr4K7+QNakxxnMeyzMdhHWyOjwV6zoJvZVZixMEqWUZtTE1WGHCQd7CfNEZimu94LRqsa/USk3cPYdJb8EsHpx7xs4+dkN7zrP1S2Jwr2aOBH/slA6eQ7G3xQMYr15sgcNflqTzuuv0ukMMSKsdVUkM+k4QjJ3CNh9Qs7DPMDsE/SKpeyWaWdRJSotCMDVnNKzsW2Ra6BVxcb7x4qDEA+PwWLWmieHaux3SeIrG/RcxFaNLQefxSr6mYyD9PCCpwpMtTfLmO3aSNButqnUWG6jJsYMz+eS2WiwPQJUNDTXK4QWBFiyQDDGobGnMrMqWTWHpHUqpWsTeFqFDmnW012nTRHrdLDFvWDcgVKi7Ves7E14UVRUyFfUHNK4mrayRqYoJV2JkmFnpfiNQdZQqtWLShB9tUrVqZjEoGCxVIkyDfkEg/DmbG/JOvDm7+CFVcHa5fiPkn7AXbXLTBF0y2vOiUqsnWLJZstPRIfs1SZ1SGKojUCPzsiU6v5IVg8HUI0RnOfYj+ln4RpFUSZE2TuNo5TImD4rPZUl4uNVciZ9AwTwWjstGmbhYvCXeyFsU7pkmhkHJRRRMRh19f+66VFEAUq6+SUdqfD5qKKWUhxnvBabdB2UUUsoN/SufdUUSAHhve8VtUVFFpBFDbUHEaLqi1+DJezOfokMRuoosGayZuJ0QaaiiRZ1m/ihjVRRMk5USJ94LiiaAtXQKmiiiBouxWbquKJDK8R91Y1P3vFcUVyRR7HhWy2qWqiibEhpRRRID/2Q==" alt="">
        </div>
        <div class="ringht-conten">
        <form action="#" method="POST">
            id
            <input type="text" name="id" id="id"><br>
            name
            <input type="text" name="name">   <br>
            <div class="body1">
                phone
                <input type="text" name="phone">
                email
                <input type="text" name="email">
            </div>
             noidung
            <input type="text" name="noidung">
            <input type="submit" name="sm" value="enter">
        </form>
        <?php
        if(isset($_POST['sm'])){
            $i="quang";
                $_SESSION["data"][$_POST['id']]=[
                    "name"=>$_POST['name'],
                    "phone"=>$_POST['phone'],
                    "email"=>$_POST['email'],
                    "noidung"=>$_POST['noidung']
                ];

        
           
        }
        ?>
        <table>
            <tr>
                <td>stt</td>
                <td>name</td>
                <td>phone</td>
                <td>email</td>
                <td>noidung</td>
            </tr>
            <?php
            if(isset($_SESSION['data'])){
            foreach($_SESSION["data"] as $k=>$v){
         
        ?>
        <tr>
            <td><?php echo $k;?></td>
            <td><?php echo $v['name'];?></td>
            <td><?php echo $v['phone'];?></td>
            <td><?php echo $v['email'];?></td>
            <td><?php echo $v['noidung'];?></td>
        </tr>
        <?php
        }
        }
        
        ?>
        </table>
  

        </div>
    </div>

     
 
</body>
</html>