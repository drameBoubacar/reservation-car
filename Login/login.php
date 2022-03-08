<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="./script.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <div class="user-box">
                    <input type="text">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password">
                    <label>Password</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </a>
            </form>
        </div>

        <div class="car_headlight" id="car_headlight">
            <img src="../img/voiture_eteint.svg" alt="">
        </div>
    </div>
</body>

</html>