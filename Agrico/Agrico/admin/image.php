<div id ='bodyright'>

    <h3>View Uploaded Images</h3>
    <div id='add'>
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Full Name</th>
               <th> Image</th>
            </tr>
            <style>
        img{
            width:150px;
        }
    </style>
            <?php
            include('inc/connection.php');
       
       $sql1=" select * from uploadimages ";
       
       $result=mysqli_query($con, $sql1);
       
       while($row=mysqli_fetch_assoc($result)){
       $id= $row['id'];
       $name=$row['name'];
       $image=$row['image'];
       echo '<tr>
       <td>'.$id.'</td>
       <td>'.$name.'</td>
       <td><img src ='.$image.' /></td>
       </tr>';
       
       
       }?>
      
        </table> 
    </div>
</div>