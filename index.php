<?php
include_once './Login/connect.php';
$sqlRentals = $db->query('SELECT * FROM user');

$rentals = $sqlRentals->fetchAll(PDO::FETCH_ASSOC);



session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app.css/app.css">
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
                <div class="trigger-menu expanded" onclick="toggleMenu()">
                    <a class="fa fa-user-o" aria-hidden="true"></a>
                </div>
                <ul class="floating-menu" id="openmenu">
                    <li><a href='#'><i class="fa fa-inbox" aria-hidden="true"></i>Profile</a></li>
                    <li class="reser"><a href='#'><i class="fa fa-car" aria-hidden="true"></i>Reservations</a></li>
                    <li><a href='#'><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Transactions</a></li>
                    <li><a href='./Disconnect/disconnect.php' name='logout'><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                </ul>
            </li>
    </header>


    <div class="container" id='s'>
        <div data-tilt class="circlepop" id="preloader">
            <div class="loading-box">
                <div class="loading-circle">
                    <p class="loading-count"><span id="loadingNumber">0</span>%</p>
                </div>
            </div>
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir">
            </div>
        </div>




        <div class="account">
            <a id="close" class="fa fa-times" aria-hidden="true"></a>
            <div class="navmenu">
                <div class="reservation">reservation</div>
                <div class="info">information</div>
            </div>
        </div>

        <!--------------- SECTION HOME ------------------->
        <div class="content" id="">
            <div class="text_section">
                <h1><span class="heading">A new</span> <span>experience.</span><br>Reserve your car<br>Now.</h1>
                <div class="errorTxt"></div>
                <div class="btn">
                    <input class="next" type="button" id="btn1" value="Choisir mon véhicule">


                </div>
            </div>
            <div class="img_car">
                <img src="/img/car_home.png" alt="">
            </div>
        </div>
        <!--------------- SECTION ADRESSE (step 1) ------------------->

        <div class="section_adress" id='slider2'>
            <div id="output"></div>
            <div class="adress">
                <div class="adress_text">
                    <h1>Discover <br>our available car</h1>
                    <p>Locate yourself to discover ours availables cars</p>
                </div>
                <div class="box_adress">
                    <div class="box_text">
                        <h1>Enter an adress</h1>
                    </div>
                    <form id="reservation_form" action="" method="post">
                        <input name="adress" type="text" class="form-control" id="search_input" placeholder="" required>
                        <input type="button" id="next2" onclick="save()" value="Suivant">
                    </form>
                </div>
            </div>
        </div>
        <div id="map"></div>
        <div id="infowindow-content">
            <span id="place-name" class="title"></span><br />
            <span id="place-address"></span>
        </div>
        <!--------------- SECTION A (step 2) -TIME----------------->




        <div class="section_date" id='slider3'>
            <div class="date">
                <div class="date_text">
                    <h1>Choose your<br> date reservation</h1>
                    <p>Locate yourself to discover ours availables cars</p>
                </div>
                <div class="box_date">
                    <div class="box_text">
                        <h1>Choose your date</h1>
                    </div>
                    <div class="form_date">
                        <div class="input_form">
                            <input type="datetime-local" name="rental_date" id="rental_date">
                            <input type="datetime-local" name='return_date' id="return_date" value="2017-06-01T08:30">
                        </div>
                        <input type="submit" id='next3' value="Suivant" onclick="saveDate()">
                    </div>
                </div>
            </div>
            <div class="section_clock">
            <div class="clock">
                <div class="hour"></div>
                <div class="min"></div>
                <div class="sec"></div>

            </div>
            </div>

         </div>


        <!------------- SLIDER SELECTION CAR-------------------->
        <div class="car_select" id="slider4">

        <i class="fa fa-arrow-circle-left" id="left"aria-hidden="true"></i>
        <i class="fa fa-arrow-circle-right" id="right"aria-hidden="true"></i>

            <div class="car_info">
                <div class="car_name">
                    <h1>

                        <?php
                        foreach ($rentals as $rental) {
                        ?>

                            <h1><?= $rental['USERNAME']; ?></h1>


                        <?php
                        }
                        ?>
                    </h1>
                    <span class="inner_shadow">SLS AMG</span>
                </div>
                <div class="car_img">
                    <img src="/img/merco.png" alt="" srcset="">
                </div>

                <div class="car_stat">
                    <div class="fa fa-paint-brush" aria-hidden="true">Stats1</div>
                    <div class="stat">Stats2</div>
                    <div class="stat">Stats3</div>
                    <div class="stat">Stats4</div>
                </div>


                <div class="category_select">
                    <nav>
                        <input type="radio" name="tab" id="home" checked>
                        <input type="radio" name="tab" id="inbox">
                        <input type="radio" name="tab" id="contact">
                        <input type="radio" name="tab" id="heart">
                        <input type="radio" name="tab" id="about">
                        <label for="home" class="home"><a>Berline</a></label>
                        <label for="inbox" class="inbox"><a>Citadine</a></label>
                        <label for="contact" class="contact"><a>SUV</a></label>
                        <label for="heart" class="heart"><a>Break</a></label>
                        <label for="about" class="about"><a>Supercar</a></label>
                        <div class="tab">
                        </div>
                    </nav>
                </div>















            </div>
            <script type="text/javascript" src="/vanilla/vanilla-tilt.js"></script>
            <script src="https://use.fontawesome.com/3d02935bac.js"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCUx06rB4M0_aqmVTME0oShUjGX1VNi8uI"></script>  -->
            <!-- <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDGsvz48NCZH1Dk_cq04rh0RfLbdfKE-sY&region=GB">
    </script> -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUx06rB4M0_aqmVTME0oShUjGX1VNi8uI&callback=initMap&libraries=places&v=weekly&channel=2" async></script>
            <script src="./node_modules/jquery/dist/jquery.js"></script>
            <script src="./node_modules/jquery-validation/dist/jquery.validate.js"></script>
            <script src="/node_modules/gsap/dist/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/84/three.min.js"></script>
            <script type="text/javascript" src="https://daks2k3a4ib2z.cloudfront.net/5317d67d660658b254000454/js/webflow.js?2f83b8326cc4c8f7327b5dba30444a37"></script>
            <script src="./globe.js"></script>
            <script src="./main.js"></script>




</body>


</html>