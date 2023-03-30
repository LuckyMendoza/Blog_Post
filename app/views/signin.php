<?php include 'template/header.php';?> 


    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign In</h2>
           



            <form action="<?php echo BASE_URL . 'User/signin'?> " method="post" x-data="{ form: {} }" >
          
                
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="  Password"  required>
            
                <button type="submit" class="btn">Submit</button>
                <h3>Dont have account? <a href="<?php echo BASE_URL . 'User/register'?>">Sign Up</a></h3>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 

