<?php include 'template/header.php';?> 



    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add User</h2>
            <div class="alert_message success">
                <p>This is an success message</p>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder=" Create Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <select name="" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                   
                </select>
            
               
                <div class="form_control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" id="Avatar">
                </div>

            
                <button type="submit" class="btn">Add User</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 