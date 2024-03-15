<div id='footer'>
    <ul>
        <li>
            <h2><span>Abo</span>ut Us</h2>
            <p>We Design A Perfect Logo For You To See Just Visit Our Logo Page By Read More Button.</p>

        </li>
        <li>
            <h2><span>Con</span>tact Us</h2>
            <table>
                <tr>
                    <td><i class="fas fa-map-marker-alt"></i></td>
                    <td>Zeal College of Engineering and Research,Dhayari Narhe Road , Narhe , pune-411041</td>
                </tr>
                <tr>
                </tr>
            </table>
           <!-- <div id='f_share'>
                <div id='fb'>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div id='insta'>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>-->
        </li>
        <li>
            <h2><span>Lea</span>ve Your Message</h2>
            <form method="post">
                <div id="f_input">
                    <i class="fas fa-user"></i>
                    <input type="text" name='name' placeholder="Enter Your Name" />

                </div>
                <div id="f_input">
                    <i class="fas fa-phone"></i>
                    <input type="number" name='mobno' placeholder="Enter  Phone Number" />
                </div>
                <textarea name="msg" placeholder="Enter Your Msg"></textarea>
                <button name = "submit" >Submit</button>
            </form>
        </li><br clear="all" />
    </ul>
<div class="footer">
        <div class="footer-copyright">© 2020 Copyright PG Life </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<html>
    <body>
    <?php
        if(isset($_POST['submit'])){
            $Name = $_POST['name'];
            $Phone = $_POST['mobno'];
            $Msg = $_POST['msg'];
         
            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "agrico";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 $db = mysqli_select_db($con,$database);
                 $sql = "INSERT INTO contactus(name,mobno,msg) VALUES ('$Name','$Phone','$Msg')";
                 $query = mysqli_query($con,$sql);
                 if($query){
                    echo "<script>alert('Data Added Successfully')</script>";;
                 }else{
                    echo "data not inserted";
                 }
            }else{
                 die("connection failed:". mysqli_connect_error());
            }                
        }
    ?>
    </body>
    </html>