<?php

$con=mysqli_connect('localhost', 'root', '','agrico');
if (!$con) {
    //echo "Connection successful";
//}else{
    die(mysqli_error($con));
}

?>