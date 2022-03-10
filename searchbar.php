<?php
 require_once './Login/connect.php';
 $allCars = $con->query('SELECT * FROM cars ORDER BY id_car DESC');
 if(isset($_GET['search']) AND !empty($_GET['search'])){
     $recherche = htmlspecialchars($_GET['search']);
    $allCars = $con->query('SELECT MODEL FROM CARS WHERE MODEL LIKE "%'.$recherche.'%" ORDER BY id_car DESC');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="search" name="search" placeholder="Recherche une voiture" autocomplete="off">
    <input type="submit" value="Envoyer" name="envoyer">
    </form>
    <div>
        <?php
            if($allCars->rowCount() > 0){
                while($car = $allCars->fetch()){
                    ?>
                    <p><?= $car['MODEL']; ?></p>
                    <?php
                }
            }else {
            ?>
            <p>Aucune voiture trouvée</p>
            <?php
            }
        ?>
    </div>
</body>
</html>