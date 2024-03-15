<?php
    include "includes/head_links.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body{
        background:url(img/uvPhoN.png);
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
                <a href="market.php">Market Price</a>
            </li>
            <li class="breadcrumb-item">
                 Data
            </li>
        </ol>
    </nav>
<h1 class="text-center my-4">Market Price</h1>
    <div class="container mt-6 d-flex justify-content-center">
    <table class="table table-bordered w-60">
   <thead class="table-dark">
    <tr>
        <th scope="col">Sr.no</th>
        <th scope="col">Label</th>
        <th scope="col">City</th>
        <th scope="col">Date</th>
        <th scope="col">Cast</th>
        <th scope="col">Minimum Rate</th>
        <th scope="col">Maximum Rate</th>
        <th scope="col">General Rate</th>
    </tr>
   </thead>
   <tbody>
<?php
// Get the selected option from the form
$selectedOption = $_POST['mySelect'];

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'agrico');

// Check connection
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Fetch data from the database based on the selected option
$sql = "SELECT * FROM market_price WHERE name = '$selectedOption'";
$result = mysqli_query($conn, $sql);
$i = 1;
// Display the results
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id= $row['id'];
$name=$row['name'];
$city=$row['city'];
$date=$row['date'];
$cast=$row['cast'];
$rate=$row['minimum_rate'];
$rate1=$row['maximun_rate'];
$rate2=$row['genral_rate'];
        echo '<tr>
<td>'.$i++.'</td>
<td>'.$name.'</td>
<td>'.$city.'</td>
<td>'.$date.'</td>
<td>'.$cast.'</td>
<td>'.$rate.'</td>
<td>'.$rate1.'</td>
<td>'.$rate1.'</td>
</tr>';
    }
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($conn);
?>
</tbody>
</table>
</div>

</body>
</html>
