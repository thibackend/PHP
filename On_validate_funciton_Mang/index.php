<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="main-style.css">
    <link rel="stylesheet" href="table-style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.theguardian.com%2Flifeandstyle%2F2021%2Fdec%2F08%2Fthe-inner-lives-of-cats-what-our-feline-friends-really-think-about-hugs-happiness-and-humans&psig=AOvVaw0xabH3U_BwBZFmSx23GaoH&ust=1677858998958000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIDXgoPOvf0CFQAAAAAdAAAAABAD" width="45" height="45" >
            </div>
            <div class="menu">
                <ul>
                    <li>HOME</li>
                    <li>ABOUT</li>
                    <li>PRODUCT</li>
                </ul>
            </div>
            <div class="login">
                <ul>
                    <li>Login</li>
                    <li>Logout</li>
                </ul>
            </div>
        </div>


         <div class="content">
         <button class="add"><a href="add.php">ADD</a></button>
            <table class="content-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Major</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>sv1</td>
                    <td> A Thi </td>
                    <td>img</td>
                    <td>Back-end</td>
                    <td>Kon tum</td>
                    <td><button class="update"><a  href="#">update</a></button> <button class="delete" ><a  href="#">delete</a></button></td>
                </tr>
            </tbody>
            </table>

        </div>
        <div class="footer"></div>

    </div>
</body>
</html>