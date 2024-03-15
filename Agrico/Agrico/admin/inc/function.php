<?php

    function view_crop(){
        include("inc/db.php");
        $get_crp=$con->prepare("select * from crops");
        $get_crp->setFetchMode(PDO:: FETCH_ASSOC);
        $get_crp->execute();
        $i=1;
        while($row=$get_crp->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['fristname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['cropname']."</td>
                    <td>".$row['duration']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['state']."</td>
                    <td>".$row['phoneno']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?crp&del_crp=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_crp'])){
            $id=$_GET['del_crp'];

            $del=$con->prepare("delete  from crops where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?crp','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?crp','_self')</script>";
            }
        }
    }



    function view_testimonial(){
        include("inc/db.php");
        $get_book=$con->prepare("select * from tbltestimonial");
        $get_book->setFetchMode(PDO:: FETCH_ASSOC);
        $get_book->execute();
        $i=1;
        while($row=$get_book->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['UserEmail']."</td>
                    <td>".$row['Testimonial']."</td>
                    <td>".$row['PostingDate']."</td>
                    <td>".$row['status']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?testimonial&del_testimonial=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_testimonial'])){
            $id=$_GET['del_testimonial'];

            $del=$con->prepare("delete  from tbltestimonial where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?testimonial','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?testimonial','_self')</script>";
            }
        }
    }

    function view_subscribers(){
        include("inc/db.php");
        $get_book=$con->prepare("select * from tblsubscribers");
        $get_book->setFetchMode(PDO:: FETCH_ASSOC);
        $get_book->execute();
        $i=1;
        while($row=$get_book->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['SubscriberEmail']."</td>
                    <td>".$row['PostingDate']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?subscribers&del_subscribers=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_subscribers'])){
            $id=$_GET['del_subscribers'];

            $del=$con->prepare("delete  from tblsubscribers where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?subscribers','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?subscribers','_self')</script>";
            }
        }
    }

    function view_conque(){
        include("inc/db.php");
        $get_book=$con->prepare("select * from tblcontactusquery");
        $get_book->setFetchMode(PDO:: FETCH_ASSOC);
        $get_book->execute();
        $i=1;
        while($row=$get_book->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['EmailId']."</td>
                    <td>".$row['ContactNumber']."</td>
                    <td>".$row['Message']."</td>
                    <td>".$row['PostingDate']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?conque&del_conque=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_conque'])){
            $id=$_GET['del_conque'];

            $del=$con->prepare("delete  from tblsubscribers where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?conque','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?conque','_self')</script>";
            }
        }
    }


    

    function contact(){
        include("inc/db.php");

        $get_con=$con->prepare("select * from contact");
        $get_con->setFetchMode(PDO:: FETCH_ASSOC);
        $get_con->execute();
        $row=$get_con->fetch();

        echo "<form method='post' enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type='email' value='".$row['email']."' name='email' /></td>
                    </tr>
                    <tr>
                        <td>Update Address Line 1</td>
                        <td><input type='text' value='".$row['address']."' name='address' /></td>
                    </tr>
                    <tr>
                        <td>Update Address Line 2</td>
                        <td><input type='text' value='".$row['address1']."' name='address1' /></td>
                    </tr>
                    <tr>
                        <td>http://youtube.com/</td>
                        <td><input type='text' value='".$row['yt']."' name='yt' /></td>
                    </tr>
                    <tr>
                        <td>http://facebook.com/</td>
                        <td><input type='text' value='".$row['fb']."' name='fb' /></td>
                    </tr>
                    <tr>
                        <td>http://instagram.com/</td>
                        <td><input type='text' value='".$row['insta']."' name='insta' /></td>
                    </tr>
                </table>
                <center><button name='up_con'>Save</button></center>
     </form>";

     if(isset($_POST['up_con'])){
         $email=$_POST['email'];
         $address=$_POST['address'];
         $address1=$_POST['address1'];
         $yt=$_POST['yt'];
         $fb=$_POST['fb'];
         $insta=$_POST['insta'];

         $up=$con->prepare("update contact set email='$email', address='$address',address1='$address1',yt='$yt',fb='$fb',insta='$insta'");
         if($up->execute()){
             echo "<script>window.open('home.php?contact','_self')</script>";
         }
     }
    }

    function about(){
        include("inc/db.php");

        $about=$con->prepare("select * from about");
        $about->setFetchMode(PDO:: FETCH_ASSOC);
        $about->execute();
        $row=$about->fetch();

        echo "<form method='post'>
                <textarea name='about'>".$row['about']."</textarea>
                <button name='up_about'>Save</button>
            </form>";

        if(isset($_POST['up_about'])){
            $info=$_POST['about'];

            $up_about=$con->prepare("update about set about='$info'");
            if($up_about->execute()){
                echo "<script>window.open('home.php?about','_self')</script>";
            }else{
                echo "<script>alert('Info Not Updated Successfully')</script>";
                echo "<script>window.open('home.php?about','_self')</script>";
            }
        }
    }


    function edit_brand(){
        include("inc/db.php");
        if(isset($_GET['edit_brd'])){
            $id=$_GET['edit_brd'];

            $get_brd=$con->prepare("select * from tblbrands where id='$id'");
            $get_brd->setFetchMode(PDO:: FETCH_ASSOC);
            $get_brd->execute();
            $row=$get_brd->fetch();

            echo "<h3> Edit Brand</h3>
                 <form id='edit_form' method='post' enctype='multipart/form-data'>
                    <input type='text' name='BrandName' value='".$row['BrandName']."' placeholder='Enter Brand Name Here' />
                    <input type='date' name='CreationDate' value='".$row['CreationDate']."' placeholder='Enter Brand Creation Date Here' />
                    <input type='date' name='UpdationDate' value='".$row['UpdationDate']."' placeholder='Enter Brand Updation Date Here' />
                    <center><button name='edit_brd'>Edit Brand</button></center>
                </form>";

                if(isset($_POST['edit_brd'])){
                    $Brand_name=$_POST['BrandName'];
                    $Creationdate=$_POST['CreationDate'];
                    $Updationdate=$_POST['UpdationDate'];
                    
                    $check=$con->prepare("select * from tblbrands where BrandName='$Brand_name'");
                    $check->setFetchMode(PDO:: FETCH_ASSOC);
                    $check->execute();
                    $count=$check->rowCount();


                    if($count==1){
                        echo "<script>alert('Brand Already Added ')</script>";
                        echo "<script>window.open('home.php?brand','_self')</script>";
                    }else{
                    $up=$con->prepare("update tblbrands set BrandName='$Brand_name' where id='$id'");
                    if($up->execute()){
                        echo "<script>alert('Brand Update Successfully')</script>";
                        echo "<script>window.open('home.php?brand','_self')</script>";
                    }else{
                        echo "<script>alert('Brand Not Updated Successfully')</script>";
                        echo "<script>window.open('home.php?brand','_self')</script>";
                    }
                    }
                    
                }
            }
    }

    function view_brand(){
        include("inc/db.php");
        $get_brd=$con->prepare("select * from tblbrands");
        $get_brd->setFetchMode(PDO:: FETCH_ASSOC);
        $get_brd->execute();
        $i=1;
        while($row=$get_brd->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['BrandName']."</td>
                    <td>".$row['CreationDate']."</td>
                    <td>".$row['UpdationDate']."</td>
                    <td>
                        <a href='home.php?brand&edit_brd=".$row['id']."' title='Edit'><i class='far fa-edit'></i></a>
                        <a style='color:#f00' href='home.php?brand&del_brand=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_brand'])){
            $id=$_GET['del_brand'];

            $del=$con->prepare("delete  from tblbrands where id='$id'");
            if($del->execute()){
                echo "<script>alert('Brand Deleted Successfully')</script>";
                echo "<script>window.open('home.php?brand','_self')</script>";
            }else{
                echo "<script>alert('Brand Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?brand','_self')</script>";
            }
        }
    }


    function add_brand(){
        include("inc/db.php");
        if(isset($_POST['add_brd'])){
            $Brand_name=$_POST['BrandName'];
            $Creationdate=$_POST['CreationDate'];
            $Updationdate=$_POST['UpdationDate'];

            $check=$con->prepare("select * from tblbrands where BrandName='$Brand_name'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count=$check->rowCount();


            if($count==1){
                echo "<script>alert('Category Already Added ')</script>";
                echo "<script>window.open('home.php?brand','_self')</script>";
            }else{
                $add_cat=$con->prepare("insert into tblbrands(BrandName,CreationDate,UpdationDate) values('$Brand_name','$Creationdate','$Updationdate')");
                if($add_cat->execute()){
                    echo "<script>alert('Brand Added Successfully')</script>";
                    echo "<script>window.open('home.php?brand','_self')</script>";
                }else{
                    echo "<script>alert('Brand Not Added Successfully')</script>";
                    echo "<script>window.open('home.php?brand','_self')</script>";
                }
                }
        }
    }


    function view_crppred(){
        include("inc/db.php");
        $get_brd=$con->prepare("select * from crop_prediction");
        $get_brd->setFetchMode(PDO:: FETCH_ASSOC);
        $get_brd->execute();
        $i=1;
        while($row=$get_brd->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['nitrogen']."</td>
                    <td>".$row['phospharas']."</td>
                    <td>".$row['k']."</td>
                    <td>".$row['temp']."</td>
                    <td>".$row['humidity']."</td>
                    <td>".$row['ph']."</td>
                    <td>".$row['rainfall']."</td>
                    <td>".$row['label']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?Crop_prediction&del_Crop_prediction=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_Crop_prediction'])){
            $id=$_GET['del_Crop_prediction'];

            $del=$con->prepare("delete  from crop_prediction where id='$id'");
            if($del->execute()){
                echo "<script>alert('Brand Deleted Successfully')</script>";
                echo "<script>window.open('home.php?Crop_prediction','_self')</script>";
            }else{
                echo "<script>alert('Brand Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?Crop_prediction','_self')</script>";
            }
        }
    }


    function add_crppred(){
        include("inc/db.php");
        if(isset($_POST['add_pred'])){
            $Nitrogen=$_POST['nitrogen'];  
            $Phospharase=$_POST['phospharas'];
            $K=$_POST['k'];
            $Temp=$_POST['temp'];    
            $Humidity=$_POST['humidity'];
            $Ph=$_POST['ph'];
            $Rainfall=$_POST['rainfall'];  
            $Label=$_POST['label'];

            $check=$con->prepare("select * from crop_prediction where nitrogen='$Nitrogen'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count=$check->rowCount();


            if($count==1){
                echo "<script>alert('Category Already Added ')</script>";
                echo "<script>window.open('home.php?Crop_prediction','_self')</script>";
            }else{
                $add_cat=$con->prepare("insert into crop_prediction(nitrogen,phospharas,k,temp,humidity,ph,rainfall,label) values('$Nitrogen','$Phospharase','$K','$Temp','$Humidity','$Ph','$Rainfall','$Label')");
                if($add_cat->execute()){
                    echo "<script>alert('Brand Added Successfully')</script>";
                    echo "<script>window.open('home.php?Crop_prediction','_self')</script>";
                }else{
                    echo "<script>alert('Brand Not Added Successfully')</script>";
                    echo "<script>window.open('home.php?Crop_prediction','_self')</script>";
                }
                }
        }
    }


    function view_market(){
        include("inc/db.php");
        $get_crp=$con->prepare("select * from market_price");
        $get_crp->setFetchMode(PDO:: FETCH_ASSOC);
        $get_crp->execute();
        $i=1;
        while($row=$get_crp->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['date']."</td>
                    <td>".$row['cast']."</td>
                    <td>".$row['minimum_rate']."</td>
                    <td>".$row['maximun_rate']."</td>
                    <td>".$row['genral_rate']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?market&del_market=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_market'])){
            $id=$_GET['del_market'];

            $del=$con->prepare("delete  from market_price where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?market','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?market','_self')</script>";
            }
        }
    }

    function add_market(){
        include("inc/db.php");
        if(isset($_POST['add_pred'])){
            $Name=$_POST['name'];  
            $Phospharase=$_POST['city'];
            $K=$_POST['date'];
            $Temp=$_POST['cast'];    
            $Humidity=$_POST['minimum_rate'];
            $Ph=$_POST['maximun_rate'];
            $Rainfall=$_POST['genral_rate'];  

            $check=$con->prepare("select * from market_price where name='$Name'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count=$check->rowCount();


        
                $add_cat=$con->prepare("insert into market_price(name,city,date,cast,minimum_rate,maximun_rate,genral_rate) values('$Name','$Phospharase','$K','$Temp','$Humidity','$Ph','$Rainfall')");
                if($add_cat->execute()){
                    echo "<script>alert('Details Added Successfully')</script>";
                    echo "<script>window.open('home.php?market','_self')</script>";
                }else{
                    echo "<script>alert('Details Not Added Successfully')</script>";
                    echo "<script>window.open('home.php?market','_self')</script>";
                }
        
        }
    }

    function view_msg(){
        include("inc/db.php");
        $get_crp=$con->prepare("select * from contactus");
        $get_crp->setFetchMode(PDO:: FETCH_ASSOC);
        $get_crp->execute();
        $i=1;
        while($row=$get_crp->fetch()): 
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['mobno']."</td>
                    <td>".$row['msg']."</td>
                    <td>
                        <a style='color:#f00' href='home.php?msg&del_msg=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                    </td>
                  <tr>";
        endwhile;

        if(isset($_GET['del_msg'])){
            $id=$_GET['del_msg'];

            $del=$con->prepare("delete  from contactus where id='$id'");
            if($del->execute()){
                echo "<script>alert('Details Deleted Successfully')</script>";
                echo "<script>window.open('home.php?msg','_self')</script>";
            }else{
                echo "<script>alert('Details Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?msg','_self')</script>";
            }
        }
    }
?>

