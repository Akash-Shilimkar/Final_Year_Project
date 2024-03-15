<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        <link rel="stylesheet" href= "css/display.css" />
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
</head>
<body>
<div id ='bodyright'>

<h3>Booking Details</h3>
<div id='add'>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                        <th> Sr.No.</th>
                        <th> Booking Number</th>
                        <th> UserEmail</th>
                        <th> VechleId</th>
                        <th> FromDate</th>
                        <th> ToDate</th>
                        <th> message</th>
                        <th> status</th>
                        <th> PostingDate</th>
                        <th> LastUpdationDate</th>
                        <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'inc/connection.php';

                            $selectquery = " select * from tblbooking ";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['BookingNumber']; ?></td>
                            <td><?php echo $res['userEmail']; ?></td>
                            <td><?php echo $res['VehicleId']; ?></td>
                            <td><?php echo $res['FromDate']; ?></td>
                            <td><?php echo $res['ToDate']; ?></td>
                            <td><?php echo $res['message']; ?></td>
                            <td><?php echo $res['Status']; ?></td>
                            <td><?php echo $res['PostingDate']; ?></td>
                            <td><?php echo $res['LastUpdationDate']; ?></td>
                            <td><a href ="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "DELETE    "><i class='fas fa-trash' aria-hidden = "true"></i></a></td>
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


</body>
</html>



