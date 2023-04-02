<?php include 'template/header.php';?> 



    <section class="form_section">
        <div class="container form_section-container">
            <h2>Edit Category</h2>
            
            <form action="<?php echo BASE_URL . 'Blog_post/update_category'?>" method="post" >
              
            <input type="hidden" name="id" value="<?php echo  $data['id'];?>">
                <input type="text" name="Title" value=<?php echo $data['Title'];?> placeholder="Title">
                <textarea name="description" id="" value=<?php echo $data['description'];?>  rows="4" placeholder="Description"></textarea>
                
            
                <button type="submit" class="btn">Update Category</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 