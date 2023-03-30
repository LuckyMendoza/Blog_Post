<?php include 'template/header.php';?> 



    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add User</h2>

            
            <?php if(lava_instance()->session->has_userdata('status')){
	            				echo alert_custom('status'); }
		            		else if(lava_instance()->session->has_userdata('errors')) {
		            			echo alert_custom('errors'); }
		            	?>
        

            <form action=<?php echo BASE_URL . 'Blog_post/addUser'?>  method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder=" Create Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <select name="is_admin" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>      
                </select>
                <div class="form_control"> 
                    <label User Avatar</label>
                    <input type="file"  name="avatar"     id="avatar"  multiple="true"  accept="image/*" required>
                </div>          

            
                <button type="submit" class="btn">Add User</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 