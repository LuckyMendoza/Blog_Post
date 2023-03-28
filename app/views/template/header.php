
<!DOCTYPE html>
<html lang="en">

</body>
</html>

<head>
  <meta charset=" UTF-8">
  <meta http-equiv="X-UA-Compatible" content="  IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Blog Website</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/public/assets/style.css'?>">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="<?php echo BASE_URL . '/public/assets/signin.js'?>"></script>
<!-- //alphine js valifdation
  <script src="//unpkg.com/alpinejs" defer></script> -->
  
</head>

<body>

  <!--==========================Navigation==============================-->
  <nav>
  <div class="container nav__container">
    <a href="" class="nav__logo">Lavalust Project</a>
    <ul class="nav__items">
      <li><a href="<?php echo BASE_URL . 'Blog_post/Home'?>">Blog</a></li>
      <li><a href="<?php echo BASE_URL . 'Blog_post/about'?>">About</a></li>
      <li><a href="<?php echo BASE_URL . 'Blog_post/services'?>">Services</a></li>
      <li><a href="<?php echo BASE_URL .  'Blog_post/contact'?>">Contact</a></li>

      <?php if( isset($_SESSION['username'])) { ?>
      
        <!-- If user is logged in, show profile, dashboard, and logout links -->
        <li class="nav__profile">
          <div class="avatar">
            <img src="" alt="Profile">
          </div>
          <ul>
            <li><a href="<?php echo BASE_URL . 'Blog_post/dashbaord'?>">Profile</a></li>
            <li><a href="<?=site_url('Blog_post/dashboard')?>">Dashboard</a></li>
            <li><a href="<?php echo BASE_URL . 'User/logout'?>">Logout</a></li>
          </ul>
        </li>
        <?php } else { ?>
        <!-- If user is not logged in, show the Sign In button -->
        <li><a href="<?php echo BASE_URL .  'Blog_post/signin'?>">Sign In</a></li>
        <?php } ?>
    </ul>
  </div>
</nav>




  <!--=============================End of Navigation=====================================-->
