<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        <link rel="stylesheet" href= "css/Bdisplay .css" />
        <link rel="stylesheet" href= "css/common .css" />
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
</head>
<body>

<?php
session_start();
require "connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
?>
<?php
    include "includes/header.php";
?>
<?php
    include "includes/head_links.php";
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Crop Prediction Data
            </li>
        </ol>
    </nav>

    <div class = "main-div">
       

        <div class="center-div">
            <div class="table">
                <table>
                    <thead><br>

                    <h1>Crop Prediction Data</h1>
                        <tr>
                            <th> Sr.No.</th>
                            <th> Nitrogen</th>
                            <th> Phospharas</th>
                            <th> K</th>
                            <th> Temperature</th>
                            <th> Humidity</th>
                            <th> PH</th>
                            <th> Rainfall</th>
                            <th> Label</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connect.php';

                            $selectquery = " select * from crop_prediction ";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);
                            $i =1;

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $res['nitrogen']; ?></td>
                                <td><?php echo $res['phospharas']; ?></td>
                                <td><?php echo $res['k']; ?></td>
                                <td><?php echo $res['temp']; ?></td>
                                <td><?php echo $res['humidity']; ?></td>
                                <td><?php echo $res['ph']; ?></td>
                                <td><?php echo $res['rainfall']; ?></td>
                                <td><?php echo $res['label']; ?></td>
                            </tr>

                        <?php

                            }

                         ?>
                    </tbody>
                </table>
            </div>
         </div>
    </div>
<script>
    $(document).ready(function(){
        $('[data-toggle = "tooltip]').tooltip();
    });
</script>

<?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
?>
</body>
</html>