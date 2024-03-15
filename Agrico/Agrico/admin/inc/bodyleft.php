<div id = 'bodyleft'>
    <h3> Crops Details Management</h3>
    <ul>
        <li><a href="home.php?dashboard"><i class="fas fa-home"></i>  Dashboard</a></li>
        <li><a href="home.php?crp"><i class="fas fa-info-circle"></i>  View Crop Details</a></li>
        <li><a href="home.php?Crop_prediction"><i class="fas fa-seedling"></i>  View Crop Prediction Details</a></li>
        <li><a href="home.php?image"><i class="fas fa-images"></i>  View Crop Uploaded Images</a></li>
        <li><a href="home.php?market"><i class="fas fa-chart-line"></i>  Market Price </a></li>
        <li><a href="home.php?msg"><i class="fas fa-phone"></i>  Customer Query </a></li>
    </ul>
    <h3>Tracter Rental  Data </h3>
    <ul>
        <li><a href="home.php?tuser"><i class="fas fa-user"></i> View All Users</a></li>
        <li><a href="home.php?booking"><i class="fas fa-play"></i> Tracter Booking </a></li>
        <li><a href="home.php?brand"><i class="fas fa-tractor"></i> Tracter Brand</a></li>
        <li><a href="home.php?subscribers"><i class="fas fa-play"></i> subscribers Details </a></li>
        <li><a href="home.php?testimonial"><i class="fas fa-comments"></i> Testimonial Details</a></li>
        <li><a href="home.php?conque"><i class="fas fa-phone"></i> Contact Query Details </a></li>
    </ul>
    <h3>User Management</h3>
    <ul>
        <li><a href="home.php?user"><i class="fas fa-user"></i> View All Farmers</a></li>
    </ul>
    <h3>Contact Management</h3>
    <ul>
        <li><a href="home.php?contact"><i class="fas fa-address-book"></i> Contact Us Page</a></li>
        <li><a href="home.php?about"><i class="fas fa-ellipsis-h"></i> About Us Page</a></li>
    </ul>
</div>

<?php
  
    if(isset($_GET['crp'])){
        include("crp.php");
    }
    if(isset($_GET['dashboard'])){
        include("dashboard.php");
    }
    if(isset($_GET['market'])){
        include("market.php");
    }
    if(isset($_GET['msg'])){
        include("msg.php");
    }
    if(isset($_GET['image'])){
        include("image.php");
    }
    if(isset($_GET['Crop_prediction'])){
        include("Crop_prediction.php");
    }
    if(isset($_GET['terms'])){
        include("terms.php");
    }
    if(isset($_GET['contact'])){
        include("contact.php");
    }
    if(isset($_GET['faqs'])){
        include("faqs.php");
    }
    if(isset($_GET['about'])){
        include("about.php");
    }
    if(isset($_GET['subscribers'])){
        include("subscribers.php");
    }
    if(isset($_GET['user'])){
        include("user.php");
    }
    if(isset($_GET['tuser'])){
        include("tuser .php");
    }
    if(isset($_GET['booking'])){
        include("booking.php");
    }
    if(isset($_GET['brand'])){
        include("brand.php");
    }
    if(isset($_GET['testimonial'])){
        include("testimonial.php");
    }
    if(isset($_GET['conque'])){
        include("conque.php");
    }
?>
