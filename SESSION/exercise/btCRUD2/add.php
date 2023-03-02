<?php session_start() ?>
<html> 

    <head>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
            <h2>ADD STUDENT</h2>
       <form action="data.php" class="frm" method="GET">
        <h2>ENTER INFORMATION</h2>
        <div class="content">
        <p>
        <label class="nameatri" for="id">ID</label>
        <input type="text" name="id" id="id"> 
        </p>   
        <p>
        <label class="nameatri" for="name">Name</label>
        <input type="text" name="name" id="name"> 
        </p>  
        <p>
        <label class="nameatri" for="email">Email:</label>
        <input type="text" name="email" id="email">
        </p>
        <p>
        <label class="nameatri" for="password">Password</label>
        <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="submit" name="submit">
    </div>
    </form> 
    </body>
</html>