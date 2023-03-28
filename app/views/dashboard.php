<?php include 'template/header.php';?> 


<section class="dashboard">
  <div class="container dashboard_container">
<!-- 
    <button id="show_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
    <button id="hide_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button> -->
    <aside>
      <ul>
        <li>
          <a href="<?php echo BASE_URL . 'Blog_post/add_post'?> " >
              <i class="uil uil-pen"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL . 'dashbaord'?>" >
                <i class="uil uil-postcard"></i>
              <h5>Mana ge Post</h5>
            </a>
          </li>
        <li>
            <a href="<?php echo BASE_URL . 'add-user'?>" >
                <i class="uil uil-user-plus"></i>
              <h5>Add User</h5>
            </a>
          </li>
          <li>
            <a href="manage-users.html" >
                <i class="uil uil-users-alt"></i>
              <h5>Manage User</h5>
            </a>
          </li>
          <li>
            <a href="<?php echo BASE_URL . 'category-posts'?>" >
                <i class="uil uil-list-ul"></i>
              <h5>Manage Categories</h5>
            </a>
          </li>
      </ul>
    </aside>
<main>
    <h2>Manage Categories</h2>
    <table>
        <thead>
          <tr>
              <th>Title</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
          <tbody>
              <tr>
                  <td>Travel</td>
                  <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.html" class="btn danger">Delete</a></td>
              </tr>
              <tr>
                <td>Wild Life</td>
                <td><a href="edit-category.html">Edit</a></td>
                <td><a href="delete-category.html">Delete</a></td>
            </tr>
            <tr>
                <td>Travel</td>
                <td><a href="edit-category.html">Edit</a></td>
                <td><a href="delete-category.html">Delete</a></td>
            </tr>
          </tbody>

        </thead>
    </table>
</main>








  </div>
</section>








<?php include 'template/footer.php';?> 