<div id ='bodyright'>

    <h3>View All Users</h3>
    <div id='user'>
      
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Full Name</th>
               <th> Email</th>
               <th> Password</th>
               <th> Contact No</th>
               <th> City</th>
               <th> Country</th>
               <th> Regiter Date</th>
               <th> Action</th>
            </tr>
            <?php 
             include("inc/db.php");
             $get_user=$con->prepare("select * from tblusers");
             $get_user->setFetchMode(PDO:: FETCH_ASSOC);
             $get_user->execute();
             $i=1;
             while($row=$get_user->fetch()): 
                 echo "<tr>
                         <td>".$i++."</td>
                         <td>".$row['FullName']."</td>
                         <td>".$row['EmailId']."</td>
                         <td>".$row['Password']."</td>
                         <td>".$row['ContactNo']."</td>
                         <td>".$row['City']."</td>
                         <td>".$row['Country']."</td>
                         <td>".$row['RegDate']."</td>
                         <td>
                         
                         <a style='color:#f00' href='home.php?tuser&del_tuser=".$row['id']."' title='Delete'><i class='fas fa-trash'></i></a>
                         </td>
                         <tr>";
             endwhile;
             
        if(isset($_GET['del_tuser'])){
            $id=$_GET['del_tuser'];

            $del=$con->prepare("delete  from register where id='$id'");
            if($del->execute()){
                echo "<script>alert('User Deleted Successfully')</script>";
                echo "<script>window.open('home.php?tuser','_self')</script>";
            }else{
                echo "<script>alert('User Not Deleted Successfully')</script>";
                echo "<script>window.open('home.php?tuser','_self')</script>";
            }
        }

       ?>
        </table> 
    </div>
</div>
