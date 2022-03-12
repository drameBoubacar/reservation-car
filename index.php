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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="connect_status">
            <div class="light"></div>
            <span>Connected</span>
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
        </ul>

    </header>
    <div class="container" id='s'>
        <div class="content" id="slider1">
            <div class="text_section">
                <h1><span class="heading">A new</span> <span>experience.</span><br>Reserve your car<br>Now.</h1>
                <div class="btn">
                    <input type="button" id="btn1" value="Démarrer">
                </div>
            </div>
            <div class="img_car">
                <img src="/img/car_home.png" alt="">
            </div>
        </div>
        <div class="content" id='slider2'>
            <div id="pac-container">
                <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
            </div>
        </div>
        <div id="map"></div>
        <div id="infowindow-content">
            <span id="place-name" class="title"></span><br />
            <span id="place-address"></span>
        </div>
        <div class="text_section">


        </div>
        <input type="button" id="btn2" value="retour">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCUx06rB4M0_aqmVTME0oShUjGX1VNi8uI"></script>
    </div>
    </div> -->

</body>
<script src="./main.js"></script>

</html>