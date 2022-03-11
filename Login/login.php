<?php
include_once 'connect.php';
session_start();


$msg = ""; 
if(isset($_POST['submit'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  if($username != "" && $password != "") {
    try {
      $query = "select username, password from user where `username`=:username and password=:password";
      $stmt = $db->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['id_user'];
        $_SESSION['sess_user_name'] = $row['username'];

       
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}




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
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <script>
                    function play() {
                        const audio = document.getElementById('audioMusic');
                        audio.play();
                    }
                </script>
                <input type='submit' id="submit" name='submit' class="sub" onclick="play()">
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
        </div>
    </div>
    <script>
        const voitureAllume = document.getElementById('carOn');
        const voitureEteint = document.getElementById('carOff');
        const submit = document.getElementById('submit');
        const form = document.getElementById('form')
        let user = '<?= $user ?>';


        submit.addEventListener("click", function() {
            if (isset(user)) {
                voitureEteint.style.display = 'none';
                voitureAllume.style.display = "flex";
                voitureAllume.style.transition = "1s";
                console.log('click');
            }

        });
    </script>
</body>

</html>