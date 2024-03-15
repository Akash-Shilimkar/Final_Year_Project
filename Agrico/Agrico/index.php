<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | AGRICO</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
<div class="banner-container">
        <h2 class="white pb-3">AGRICO - A Smart Way of Farming</h2>
</div>
    

    <div class="page-container">
        <h1 class="city-heading">
            Services
        </h1>
        
        <div class="row">
            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="Crop_Details.php"><i class="fas fa-seedling"></i><br>Crop Details</a>
                    </div>
            </div>



            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="./tractor rental"><i class="fas fa-tractor"></i><br>Tractor Rental Services</a>
                    </div>
            </div>



            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="upload.php"><i class="fas fa-upload"></i><br>Upload Crop Image</a>
                    </div>
            </div>



            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="prediction.php"><i class="fas fa-seedling"></i><br>Crop Prediction</a>
                    </div>
            </div>



            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="Weather.html"><i class="fas fa-cloud"></i><br>weather</a>
                    </div>
            </div>



            <div class="city-card-container col-md">
                    <div class="city-card rounded-circle">
                    <a href="market.php"><i class="fas fa-chart-line"></i><br>Market Price of crop</a>
                    </div>
            </div>
       
    
        </div>
    </div>

    

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
<script>

</script>

</body>

</html>
