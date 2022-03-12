<?php

include_once './Login/connect.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app.css/app.css">
    <script src="https://use.fontawesome.com/3d02935bac.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="connect_status">
            <div class="light"></div>
            <span><?php echo $_SESSION['username']; ?>Connected</span>
        </div>

        <div class="logo">
            <h1>donkeycar.</h1>
        </div>


        <ul class="fmenu" id="mymenu">
            <li class="fmenu-item">
                <div class="trigger-menu expanded">
                    <a href="#" class="fa fa-user-o" aria-hidden="true"></a>

                </div>
                <ul class="floating-menu">
                    <li><a href='#'><i class="fa fa-inbox" aria-hidden="true"></i>Profile</a></li>
                    <li><a href='#'><i class="fa fa-car" aria-hidden="true"></i>Reservations</a></li>
                    <li><a href='#'><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Transactions</a></li>
                    <li><a href='./Disconnect/disconnect.php' name='logout'><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                </ul>
            </li>


    </header>
    <div class="container" id='s'>
        <div class="content" id="slider1">
            <div class="text_section">
                <h1><span class="heading">A new</span> <span>experience.</span><br>Reserve your car<br>Now.</h1>

                <div class="btn">
                    <input type="button" id="btn1" value="Démarrer">

                </div>

            </div>
            <div data-tilt class="img_car">
                <img src="/img/car_home.png" alt="">
            </div>
        </div>
        <div class="content" id='slider2'>
            <div class="text_section">
                <h1>Wsh bande de<br><br>BATARD.</h1>
                <input type="button" id="btn2" value="retour">
            </div>
            <div class="img_car">
                <img src="./img/car_home.png" alt="">
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/vanilla/vanilla-tilt.js"></script>
</body>
<script src="./main.js"></script>

</html>