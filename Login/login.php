<?php
include_once('./connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="connect_status">
      <div class="light"></div>
      <span>Disconnected</span>
    </div>

  </header>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form id="form" method="POST">
        <div class="user-box">
          <input type="text" id='username' name="username">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" id='password' name="password">
          <label>Password</label>
        </div>
        <script>
          function play() {
            const audio = document.getElementById('audioMusic');
            audio.play();
          }
        </script>
        <input type="submit" id="submit" name='submit' class="sub" onclick="play()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </input>
        <audio id="audioMusic">
          <source src="./car-engine-sound-effect.mp3">
        </audio>
      </form>
    </div>

    <div class="car_headlight" id="car_headlight">
      <img src="../img/voiture_eteint.svg" alt="" id='carOff' class="voiture_eteint">
      <img src="../img/voiotit.svg" alt="" id='carOn' class="voiture_allumer">
      <img src="../img/voiture_erreur.svg" alt="" id='carErr' class="voiture_allumer">
    </div>
  </div>
  <script type="text/javascript" src="/vanilla/vanilla-tilt.js"></script>
    <script src="https://use.fontawesome.com/3d02935bac.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCUx06rB4M0_aqmVTME0oShUjGX1VNi8uI"></script>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/jquery-validation/dist/jquery.validate.js"></script>
  <script src="./script.js">
  </script>
</body>

</html>