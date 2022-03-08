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
    <link rel="stylesheet" href="/sass/app.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="container_form">
            <form action="" method="POST" class="form">
                <div class="form-example">
                    <label for="name">Your name: </label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-example">
                    <label for="email">Your email: </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-example">
                    <label for="tel">Your phone number: </label>
                    <input type="tel" name="tel" id="tel" required>
                </div>
                <div class="form-example">
                    <label for="address">Your address: </label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="form-example">
                    <input type="submit" value="Subscribe!">
                </div>
            </form>
        </div>
        <div class="car_headlight" id="car_headlight">
        </div>
    </div>
</body>

</html>