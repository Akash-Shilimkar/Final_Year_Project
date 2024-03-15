<div id ='bodyright'>

    <h3>View subscribers Details</h3>
    <div id='add'>
        <!--<details>
            <summary>Add Crop</summary>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="cat_name" placeholder="Enter Category Name Here" />
                <center><button name="add_cat">Add Category</button></center>
            </form>
        </details>-->
        <table cellspacing="0">
            <tr>
               <th> Sr.No.</th>
               <th> Subscriber Email</th>=
               <th> PostingDate </th>
               <th> Action</th>
            </tr>
            <?php echo view_subscribers(); ?> 
        </table> 
    </div>
</div>
