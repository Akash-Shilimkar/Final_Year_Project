<!DOCTYPE html>
<div id ='bodyright'>
<?php 
if(isset($_GET['edit_pred'])) { 
    echo edit_brand();
 }else{  ?>

    <h3>Crop Prediction Details</h3>
    <div id='add'>
        <details>
            <summary>Add Prediction</summary>
            <form method="post" enctype="multipart/form-data">
                <input type="integer" name="nitrogen" placeholder="Enter Nitrogen Here" />
                <input type="integer" name="phospharas" placeholder="Enter Phospharase Here" />
                <input type="integer" name="k" placeholder="Enter k Here" />
                <input type="float" name="temp" placeholder="Enter Temperature Here" />
                <input type="float" name="humidity" placeholder="Enter Humidity Here" />
                <input type="float" name="ph" placeholder="Enter PH Here" />
                <input type="float" name="rainfall" placeholder="Enter Rainfall Here" />
                <input type="text" name="label" placeholder="Enter Label Here" />
                <center><button name="add_pred">Add Crop Prediction</button></center>
            </form>
        </details>
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Nitrogen</th>
               <th> Phospharas</th>
               <th> K</th>
               <th> Temperature</th>
               <th> Humidity</th>
               <th> PH</th>
               <th> Rainfall</th>
               <th> Label</th>
               <th> Action</th>
            </tr>
            <?php echo view_crppred(); ?> 
        </table> 
    </div>
</div>
<?php echo add_crppred(); } ?>