<div id ='bodyright'>

    <h3>View Testimonial Details</h3>
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
               <th> userEmail</th>
               <th> Testimonial</th>
               <th> PostingDate </th>
               <th> Status</th>
               <th> Action</th>
            </tr>
            <?php echo view_testimonial(); ?> 
        </table> 
    </div>
</div>
