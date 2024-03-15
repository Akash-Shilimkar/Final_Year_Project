<!DOCTYPE html>
<html>
<head>
<link href = "css/crop.css" rel = "stylesheet" >
    <title>Welcome | AGRICO</title>
</head>

<body>
    
<?php

        if(isset($_POST['submit'])){
            $Fristname =$_POST['fristname'];
            $Lastname =$_POST['lastname'];
            $Cropname = $_POST['cropname'];
            $Address = $_POST['address'];
            $Duration =$_POST['duration'];
            $City = $_POST['city'];
            $State = $_POST['state'];
            $Phone = $_POST['phoneno'];

            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "agrico";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 echo 'Connected to MySQL';
                 $db = mysqli_select_db($con,$database);
                 $sql = "INSERT INTO crops(fristname,lastname,cropname,address,duration,city,state,phoneno) VALUES ('$Fristname','$Lastname','$Cropname','$Address','$Duration','$City','$State','$Phone')";
                 $query = mysqli_query($con,$sql);
                 if($query){
                    echo "data inserted";
                 }else{
                    echo "data not inserted";
                 }
            }else{
                 die("connection failed:". mysqli_connect_error());
            }                

        }
    ?>



            
    <div>
        <form action="" method="POST"> 
        <div class = "container">
        <h1>Crop Details</h1>
        <div class = "inputbox">
            <input type = "text" name ="fristname" required="">
            <label>FristName</label>
            </div>
            
            <div class = "inputbox">
            <input type = "text" name ="lastname" required="">
            <label>LastName</label>
            </div>

            <div class = "inputbox">
            <input type = "text" name ="cropname" required="">
            <label>Crop Name</label>
            </div>

            <div class = "inputbox">
            <input type = "text" name ="duration" required="">
            <label>Duration</label>
            </div>

            <div class = "inputbox">
            <input type = "text" name ="address" required="">
            <label>Address</label>
            </div>

            <div class = "inputbox">
            <input type = "text" name ="city" required="">
            <label>City</label>
            </div>


            <div class = "inputbox">
            <input type = "text" name ="state" required="">
            <label>State</label>
            </div>
            
            <div class = "inputbox">
            <input type = "number" name ="phoneno" required="">
            <label>Contact</label>
            </div>


            <center> <input type = "submit" name = "submit" type = "submit" value ="Submit">   <!--<button class="btn btn-dark" name="back"><a href="index.php">Back</a></button>--> </center>
           
            <div class = "inputbox">
            </div>
        </form> 
    </div>  
</div> 

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
 <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
 ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Crop Details
            </li>
        </ol>
    </nav>
   
   
</body>
</html>
