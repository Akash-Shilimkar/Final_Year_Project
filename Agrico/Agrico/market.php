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
<html>
<head>
    <title>Market Price Analyasis</title>
    <style>
        

            body {
                background:url(img/Wiki-background.jpg);
            }

            .market {
                margin: 10%;
                text-align: center;
            
            }
            .market form label{
                text-align: center;
                font-size: 20px;
                color: #000;

            }
             select {
                text-align:center;
                position: absolute;
             }

            button {
                margin: 2%;
                background: transparent;
                border: none;
                outline: none;
                color:#fff;
                background: #03a9f4;
                padding: 5px 10px;
                cursor: pointer;
                border-radius: 5px;
            }

    </style>
</head>
<body>
<nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Market Price
            </li>
        </ol>
    </nav>
    <div class ="market">
    <form method="post" action="process.php">
        <label for="mySelect">Select a Agricultural goods:</label>
        <select style='text-align:center;width:10%;font-size:20px;box-sizing: border-box;position: absolute;' name="mySelect" id="mySelect" >
            <option value="select">Select Agricultural Goods  </option>
            <option value="rice">Rice  </option>
            <option value="maka">Maka </option>
            <option value="harbhara">Harbhara </option>
            <option value="rajma">Rajma  </option>
            <option value="turdaal">Tur Daal </option>
            <option value="mutki">Mutki </option>
            <option value="mugdaal">Mug Daal  </option>
            <option value="Masurdaal">Masur Daal </option>
            <option value="mango">Mango </option>
            <option value="apple">Apple  </option>
            <option value="bannana">Bananna  </option>
            <option value="pomogrante">pomogrante </option>
            <option value="onion">Onion </option>
        </select><br>
        <button type="submit">Submit</button>
    </form>

    
</div>

<?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
  
</body>
</html>
