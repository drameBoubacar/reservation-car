<?php
include_once './Login/connect.php';
session_start();
$sqlCar1 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 1');
$sqlCar2 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 2');
$sqlCar3 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 3');
$sqlCar4 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 4');
$sqlCar5 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 5');
$sqlCar6 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 6');
$sqlCar7 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 7');
$sqlCar8 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 8');
$sqlCar9 = $db->query('select cars.id_car, cars.color, cars.kilometer, cars.energy, cars.capacity, cars.price, cars.year_model, category.id_category, category.category_car, brand.brand_car id_brand, model.model_car id_model, model.model_img model_img from cars,category join brand on category.id_brand = brand.id_brand join model on category.id_model = model.id_model where cars.id_car = category.id_category AND  cars.id_car= 9');
$rentals1 = $sqlCar1->fetchAll(PDO::FETCH_ASSOC);
$rentals2 = $sqlCar2->fetchAll(PDO::FETCH_ASSOC);
$rentals3 = $sqlCar3->fetchAll(PDO::FETCH_ASSOC);
$rentals4 = $sqlCar4->fetchAll(PDO::FETCH_ASSOC);
$rentals5 = $sqlCar5->fetchAll(PDO::FETCH_ASSOC);
$rentals6 = $sqlCar6->fetchAll(PDO::FETCH_ASSOC);
$rentals7 = $sqlCar7->fetchAll(PDO::FETCH_ASSOC);
$rentals8 = $sqlCar8->fetchAll(PDO::FETCH_ASSOC);
$rentals9 = $sqlCar9->fetchAll(PDO::FETCH_ASSOC);



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
                    <li><a href='./Disconnect/disconnect.php' name='logout'><i class="fa fa-sign-out" aria-hidden="true"></i>Deconnection</a></li>
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
                <div class="reservation">reservations</div>
                <div class="info">informations</div>
            </div>
        </div>

        <!--------------- SECTION HOME ------------------->
        <div class="content" id="">
            <div class="text_section">
                <h1><span class="heading">Une nouvelle</span> <span>experience.</span><br>Reserver votre voiture<br>Maintenant.</h1>
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
                    <h1>Découvrez <br>toute nos voitures</h1>
                    <p>Localiser vous pour reserver une voiture</p>
                </div>
                <div class="box_adress">
                    <div class="box_text">
                        <h1>Entrer une adresse</h1>
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
                    <h1>Choisissez<br> une date de reservation</h1>
                    <p>Selon votre disponibilité</p>
                </div>
                <div class="box_date">
                    <div class="box_text">
                        <h1>Choisir une date</h1>
                    </div>
                    <div class="form_date">
                        <div class="input_form">
                            <input type="datetime-local" name="rental_date" id="rental_date" value="2022-03-18T00:00">
                            <input type="datetime-local" name='return_date' id="return_date" value="2022-03-25T00:00">
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

            <i class="fa fa-arrow-circle-left" id="left" name='left' aria-hidden="true"></i>
            <i class="fa fa-arrow-circle-right" id="right" name='right'aria-hidden="true"></i>

            <div class="car_info">
                <div class="car_name">
                    <h1>
                    <?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <h1> <?= $rental['id_brand']; ?></h1>
                    <?php
                    }
                    ?>
                    </h1>
                    <?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <span class="inner_shadow"> <?= $rental['id_model']; ?></span>
                    <?php
                    }
                    ?>
                </div>
                <div class="car_img">
                    <?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <img src="<?= $rental['model_img'] ?>" alt="" srcset="">

                    <?php
                    }
                    ?>
                </div>

                <div class="car_stat">
                    <div class="stat"><?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <?= $rental['color'] ?>

                    <?php
                    }
                    ?></div>
                    <div class="stat"><?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <?= $rental['kilometer'] ?> km

                    <?php
                    }
                    ?></div>
                    <div class="stat"><?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <?= $rental['energy'] ?>
                    <?php
                    }
                    ?></div>
                    <div class="stat"><?php
                    foreach ($rentals1 as $rental) {
                    ?>
                        <?= $rental['price'] ?>€/jour

                    <?php
                    }
                    ?></div>
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