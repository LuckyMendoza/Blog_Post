<!DOCTYPE html>
<html lang="en">

</body>
</html>

<head>
  <meta charset=" UTF-8">
  <meta http-equiv="X-UA-Compatible" content="  IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Multipage Blog Website</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/public/assets/style.css'?>">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- //alphine js valifdation
  <script src="//unpkg.com/alpinejs" defer></script> -->
  
</head>

<body>

  <!--==========================Navigation==============================-->



  <nav>
    <div class="container nav__container">
      <a href="" class="nav__logo">LavaLods</a>
      <ul class="nav__items">
        <li><a href="<?php echo BASE_URL . 'Blog_post/Home'?>">Blog</a></li>
        <li><a href="<?php echo BASE_URL . 'Blog_post/about'?>">About</a></li>
        <li><a href="<?php echo BASE_URL . 'Blog_post/services'?>">Services</a></li>
        <li><a href="<?php echo BASE_URL .  'Blog_post/contact'?>">Contact</a></li>
        
        <li><a href="<?php echo BASE_URL .  'Blog_post/signin'?>">Sign In</a></li>
        
        <li class="nav__profile">
          <div class="avatar">
            <img src="" alt="Profile ">
          </div>
          <ul>
            <li><a href="dashboard.html">Dashboard </a></li>
            <li><a href="logout.html">Logout</a> </li>
        </li>

    
      
       
      </ul>


      <button id="open_nav-btn"><i class="uil ulil-bars"></i> </button>
      <button id="close_nav-btn"><i class="uil ulil-bars"></i> </button>
    </div>
  </nav>

  <!--=============================End of Navigation=====================================-->
