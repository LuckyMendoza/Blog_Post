<?php include 'template/header.php';?> 




    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add Post</h2>
        

            <form action="<?php echo BASE_URL. 'Post/addPost'?>" method="post" enctype="multipart/form-data">
              
               
                <input type="text" name="title" placeholder="Title">
                <select name="n_category" id="" >
                    <option value="travel">Travel</option>
                    <option value="art">Art</option>
                    <option value="science">Sceinece</option>
                    <option value="music">Music</option>
                    <option value="nature">Nature</option>
                    <option value="animal">Animal</option>
                   
                </select>
                <textarea name="body" id=""  rows="10" placeholder="Body"></textarea>
               
                <div class="form_control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file" name= "thumbnail" id="thumbnail"  multiple="true"  accept="image/*" required >
                </div>

            
                <button type="submit" class="btn">Add Post</button>

            </form>
        </div>
    </section>

    <?php include 'template/footer.php';?> 