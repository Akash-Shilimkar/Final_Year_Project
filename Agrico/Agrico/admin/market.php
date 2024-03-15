<!DOCTYPE html>
<div id ='bodyright'>
<?php 
if(isset($_GET['edit_pred'])) { 
    echo edit_brand();
 }else{  ?>

    <h3>Market Price Details</h3>
    <div id='add'>
        <details>
            <summary>Add Market Price</summary>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter Name Here" />
                <input type="text" name="city" placeholder="Enter City Here" />
                <input type="date" name="date" placeholder="Enter Date Here" />
                <input type="text" name="type" placeholder="Enter Type Here" />
                <input type="integer" name="minimum_rate" placeholder="Enter Minimum Rate Here" />
                <input type="integer" name="maximun_rate" placeholder="Enter Maximum Rate Here" />
                <input type="integer" name="genral_rate" placeholder="Enter Genral Rate Here" />
                <center><button name="add_pred">Add Data</button></center>
            </form>
        </details>
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Label</th>
               <th> City</th>
               <th> Date</th>
               <th> Cast</th>
               <th> Minimum Rate</th>
               <th> Maximun Rate</th>
               <th> General Rate</th>
               <th> Action</th>
            </tr>
            <?php echo view_market(); ?> 
        </table> 
    </div>
</div>
<?php echo add_market(); } ?>