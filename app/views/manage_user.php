<?php include 'template/header.php';?> 


<section class="dashboard">
  <div class="container dashboard_container">
<!-- 
    <button id="show_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
    <button id="hide_sidebar-btn "class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button> -->
   

    <aside>
  <ul>
    <?php if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) { ?>
      <li>
        <a href="<?php echo BASE_URL . 'Blog_post/add_user'?>" >
          <i class="uil uil-user-plus"></i>
          <h5>Add User</h5>
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL . 'Blog_post/manage_users'?>" >
          <i class="uil uil-users-alt"></i>
          <h5>Manage User</h5>
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL . ''?>" >
          <i class="uil uil-list-ul"></i>
          <h5>Manage Categories</h5>
        </a>
      </li>
    <?php } ?>
    <li>
      <a href="<?php echo BASE_URL . 'Blog_post/add_post'?> " >
        <i class="uil uil-pen"></i>
        <h5>Add Post</h5>
      </a>
    </li>
    <li>
      <a href="<?php echo BASE_URL . 'dashbaord'?>" >
        <i class="uil uil-postcard"></i>
        <h5>Manage Post</h5>
      </a>
    </li>
  </ul>
</aside>

<main>
    <h2>Manage Users</h2>
    <table>
        <thead>
          <tr>
             
            <th>Username</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Admin</th>
          </tr>
         

          <?php foreach ($data as $datum):?>
                <tbody>
                  <tr>         
                  <td><?php echo $datum['username'];?></td>
                  <td><?php echo $datum['password'];?></td>
                  <td><?php echo $datum['is_admin'];?></td>
                  <td><a class="btn sm"  href="">Edit</a></td>
                  <td><a  class="btn danger" href="">Delete</a></td>
                  </tr>   
                </tbody>
                <?php endforeach; ?>
                  
              
        </thead>
    </table>
</main>







  </div>
</section>






<?php include 'template/footer.php';?> 