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
                    <a href="" class="fa fa-user-o" aria-hidden="true"></a>

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
        
    <div class="progress-wrap">
			<div class="line-progress-bar">
				<div class="line"></div>
				<ul class="checkout-bar">
					<li class="progressbar-dots active"><span>step 1</span></li>
					<li class="progressbar-dots"><span>step 2</span></li>
					<li class="progressbar-dots"><span>Final step</span></li>
				</ul>
			</div>
		</div>
        <div class="content" id="">
            <div class="text_section">
                <h1><span class="heading">A new</span> <span>experience.</span><br>Reserve your car<br>Now.</h1>
                <div class="errorTxt"></div>
                <div class="btn">
                    <input class="next" type="button" id="btn1" value="Démarrer">


                </div>

            </div>
            <div data-tilt class="img_car">
                <img src="/img/car_home.png" alt="">
            </div>
        </div>
        <div class="section_adress" id='slider2'>
            <div class="text">
                <h1>Entre votre adresse</h1>
            </div>
           <form id="reservation_form" action="" method="post">
                <input name="adress" type="text" class="form-control" id="search_input" required>
                <input type="button" id="next2" value="Démarrer">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="/vanilla/vanilla-tilt.js"></script>
    <script src="https://use.fontawesome.com/3d02935bac.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCUx06rB4M0_aqmVTME0oShUjGX1VNi8uI"></script>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
<script src="./node_modules/jquery-validation/dist/jquery.validate.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script> -->
    <script src="./main.js"></script>

</body>


</html>