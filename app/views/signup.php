<?php include 'template/header.php';?> 


<!-- <script>
    window.livewire = function() {
        return {
            validateUsername(username) {
                return username !== '';
            }
        }
    }
</script>

 -->


    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign Up</h2>
            <?php if(lava_instance()->session->has_userdata('status')){
	            				echo alert_custom('status'); }
		            		else if(lava_instance()->session->has_userdata('errors')) {
		            			echo alert_custom('errors'); }
		            	?>

            <form action="<?=site_url('User/insert ')?>" method="post" enctype="multipart/form-data"   >
         
                <input type="text" name="username" placeholder="Username"   required >
 
                <input type="email" name="email" placeholder="Email"   required >
        
                <input type="password" name="password" placeholder=" Create Password" required >
                <input type="password" name="confirm_password" placeholder="Confirm Password" required  >
                <div class="form_control"> 
                    <label User Avatar</label>
                    <input type="file"  name="avatar"     id="avatar"  multiple="true"  accept="image/*" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <h3>Already have an account? <a href="<?=site_url('User/login')?>">Sign In</a></h3>
        
            </form>
        </div>
    </section>
    

  






    <?php include 'template/footer.php';?> 