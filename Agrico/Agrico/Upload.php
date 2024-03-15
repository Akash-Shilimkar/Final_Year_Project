<?php
require_once('./operations.php');
?>

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

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Image upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Image
            </li>
        </ol>
    </nav>
    <h1 class="text-center my-3">Upload Crop Image</h1>
    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            <!--<div class="form-group my-4"> 
                <input type="text" name="username"
                placeholder="Username"
                class="form-control">
            </div>
            <div class="form-group my-4"> 
                <input type="text" name="username"
                placeholder="Mobile"
                class="form-control">
            </div>-->
            <?php inputFields("Username","username","","text") ?>
            <?php inputFields("Mobile","mobile","","text") ?>
            <?php inputFields("","file","","file") ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>   <!--<button class="btn btn-dark" name="back"><a href="index.php">Back</a></button> -->
             
        </form> 
    </div>
    
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>
</html>