<!DOCTYPE html>
<div id ='bodyright'>
<?php 
if(isset($_GET['edit_brd'])) { 
    echo edit_brand();
 }else{  ?>

    <h3>Tractor Brands Details</h3>
    <div id='add'>
        <details>
            <summary>Add Brand</summary>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="BrandName" placeholder="Enter Brand Name Here" />
                <input type="date" name="CreationDate" placeholder="Enter Brand Creation Date Here" />
                <input type="date" name="UpdationDate" placeholder="Enter Brand Updation Date Here" />
                <center><button name="add_brd">Add Brand</button></center>
            </form>
        </details>
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Brand Name</th>
               <th> Creation Date</th>
               <th> Updation Date</th>
               <th> Action</th>
            </tr>
            <?php echo view_brand(); ?> 
        </table> 
    </div>
</div>
<?php echo add_brand(); } ?>