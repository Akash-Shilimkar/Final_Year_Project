<div id ='bodyright'>

    <h3>View All Farmers</h3>
    <div id='user'>
      
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Email</th>
               <th> Password</th>
               <th> Full Name</th>
               <th> Contact</th>
               <th> Gender</th>
               <th> Address</th>
               <th> Action</th>
            </tr>
            <?php 
             include("inc/db.php");
             $get_user=$con->prepare("select * from user");
             $get_user->setFetchMode(PDO:: FETCH_ASSOC);
             $get_user->execute();
             $i=1;
             while($row=$get_user->fetch()): 
                 echo "<tr>
                         <td>".$i++."</td>
                         <td>".$row['email']."</td>
                         <td>".$row['password']."</td>
                         <td>".$row['full_name']."</td>
                         <td>".$row['phone']."</td>
                         <td>".$row['gender']."</td>
                         <td>".$row['address']."</td>
                         <td>
                         <a style='color:#f00' href='home.php?user&del_user=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                         </td>
                         <tr>";
                         
             endwhile;
             
        if(isset($_GET['del_user'])){
            $id=$_GET['del_user'];

            $del=$con->prepare("delete  from user where id='$id'");
            if($del->execute()){
                echo "<script>alert('User Deleted Successfully')</script>";
                echo "<script>window.open('home.php?user','_self')</script>";
            }else{
                echo "<script>alert('User Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?user','_self')</script>";
            }
        }
       ?>
        </table> 
    </div>
</div>
