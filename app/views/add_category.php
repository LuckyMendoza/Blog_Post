<?php include 'template/header.php';?> 



    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add Category</h2>
          

            <form action="<?php echo BASE_URL . 'Blog_post/addCategory'?>" method="post" >
              
               
                <input type="text" name="Title" placeholder="Title">
                <textarea name="description" id=""  rows="4" placeholder="Description"></textarea>
                
            
                <button type="submit" class="btn">Add Category</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 