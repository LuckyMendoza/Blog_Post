<?php include 'template/header.php';?> 




    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add Post</h2>
            <div class="alert_message success">
                <p>This is an success message</p>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="Title" placeholder="Title">
                <select name="" id="">
                    <option value="1">Travel</option>
                    <option value="2">Art</option>
                    <option value="3">Sceinece</option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                </select>
                <textarea name="body" id=""  rows="10" placeholder="Body"></textarea>
               
                <div class="form_control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>

            
                <button type="submit" class="btn">Add Post</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 