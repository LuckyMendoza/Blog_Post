<?php include 'template/header.php';?> 




    <section class="form_section">
        <div class="container form_section-container">
            <h2>Edit User</h2>
          

            <form action="" method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                
                <select name="" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                   
                </select>
            
               

            
                <button type="submit" class="btn">Update User</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 