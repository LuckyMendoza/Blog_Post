<?php include 'template/header.php';?> 




    <section class="form_section">
        <div class="container form_section-container">
            <h2>Edit User</h2>
          

            <form action="<?php echo BASE_URL . 'Blog_post/update_user'?> " method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="username"  value="<?php echo $data['username']; ?>" placeholder="Username">
               
                
                <select name="is_admin" value= "<?php echo $data['is_admin'];?>" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                   
                </select>
            
               

            
                <button type="submit" class="btn">Update User</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 