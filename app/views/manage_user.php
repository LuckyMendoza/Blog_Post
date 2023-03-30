<?php include 'template/header.php';?> 


<section class="dashboard">
  <div class="container dashboard_container">
<!-- 
    <button id="show_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
    <button id="hide_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button> -->
    <aside>
      <ul>
        <li>
          <a href="add-post.html" >
              <i class="uil uil-pen"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <li>
            <a href="dashboard.html" >
                <i class="uil uil-postcard"></i>
              <h5>ManagePost</h5>
            </a>
          </li>
        <li>
            <a href="add-user.html" >
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
            <a href="manage-categories.html" >
                <i class="uil uil-list-ul"></i>
              <h5>Manage Categories</h5>
            </a>
          </li>
      </ul>
    </aside>
<main>
    <h2>Manage Users</h2>
    <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Admin</th>
          </tr>
          <tbody>
              <tr>
                  <td>name here</td>
                  <td>Username</td>
                 
                  <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.html" class="btn danger">Delete</a></td>
                  <td>yes</td>
              </tr>
              <tr>
                <td>name here</td>
                  <td>Username</td>
              
                  <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.html" class="btn danger">Delete</a></td>
                  <td>yes</td>
            </tr>
            <tr>
                <td>name here</td>
                <td>Username</td>
               
                <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                <td><a href="delete-category.html" class="btn danger">Delete</a></td>
                <td>yes</td>
            </tr>
          </tbody>

        </thead>
    </table>
</main>








  </div>
</section>








<?php include 'template/footer.php';?> 