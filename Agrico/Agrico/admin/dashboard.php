<!DOCTYPE html>
<div id ='bodyright'>
<html>
<head>
    <style>
        .container {
            margin:2%;
            padding:2%;
            display: flex;
            flex-wrap: wrap;
            text-decoration:none;
            gap: 20px;
            
        }
        .box {
            width:20%;
            position: relative;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            
        }
       .box center a{
        color: black;
        text-decoration:none;
        
       }
    </style>
</head>
<body>
    <h3>Dashboard</h3>
    <div class="container">
     
    <div class="box" style="background-color:#e0442f;color:black;">
        <h2><i class="fas fa-info-circle"></i>  Crop Details</h2><br>
        <center><a href="home.php?crp">View Details</a> </center>
    </div>

    <div class="box" style="background-color:#76e491;color:black;">
    <h2 ><i class="fas fa-seedling"></i>  Crop Prediction </h2><br>
        <center><a href="home.php?Crop_prediction">View Details</a></center>
    </div> 
    
    <div class="box" style="background-color:#9ee0e9;color:black;">
        <h2><i class="fas fa-images"></i>   Crop Images</h2><br>
        <center><a href="home.php?image">View Images</a> </center>
    </div>

    <div class="box" style="background-color:#ec8cbc;color:black;">
        <h2><i class="fas fa-chart-line"></i>  Market Price</h2><br>
        <center><a href="home.php?market">View</a> </center>
    </div>

    <div class="box" style="background-color:#9ee0e9;color:black;">
        <h2><i class="fas fa-play"></i> Tracter Booking</h2><br>
        <center><a href="home.php?booking">View Details</a> </center>
    </div>

    <div class="box" style="background-color:#ec8cbc;color:black;">
        <h2><i class="fas fa-tractor"></i> Tracter Brand</h2><br>
        <center><a href="home.php?brand">View Details</a> </center>
    </div>

    <div class="box" style="background-color:#e0442f;color:black;">
        <h2><i class="fas fa-user"></i> Manage Farmers</h2><br>
        <center><a href="home.php?user">View Details</a> </center>
    </div>

    <div class="box" style="background-color:#76e491;color:black;">
        <h2><i class="fas fa-play"></i> Tracter Booking</h2><br>
        <center><a href="home.php?booking">View Details</a> </center>
    </div>
    </div>
</body>
</html>
