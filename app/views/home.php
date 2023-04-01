 <?php include 'template/header.php';?> 




<!--===============================search bar============================-->
<section class="search_bar">
  <form action="" class="container search_bar-container" >
    <div>
      <i class="uil uli-search"></i>
      <input type="search"placeholder="search">
    </div>
    <button type="submit" class="btn">Go </button>
  </form>
</section>
<!--===============================End of search bar============================-->




  <!--================================Featured====================================================-->
  <section class="featured">
    <div class="container featured_container">
      <div class="post_thumbnail">
        <img src="<?php echo BASE_URL . '/public/img/doc32.jpg'?>" alt="blog1.jpg">
      </div>
      <div class="post_info">
        <a href="category-posts.html" class="category_button">Wild Life</a>
        <h2 class="post_title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
          o eos repellendus amet accusamus.</a></h2>
        <p class="post_body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum sunt maxime recusandae tempore aperiam
     
        </p>
        <div class="post_author">
          <div class="post_author-avatar">
            <img src="">
          </div>
          <div class="post_author-info">
            <h5>By:JaneDoe</h5>
            <small>June 10 </small>

          </div>
        </div>
      </div>

    </div>
  </section>
  <!--===========================End of feature===========================-->


  <!--=============================Post=============================================-->

  <section class="post">
    <div class="container post_container">

      <article class="post">
        <div class="post_thumbnail">
          <img src="<?php echo BASE_URL . '/public/img/doc32.jpg'?>" alt="dto ay author image"" alt="blog2">
        </div>
        <div class="post_info">
          <a href="/category-posts" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, deserunt.

            </a>
          </h3>
          <p class="post_body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. E
        

          </p>

          <div class="post_author">
            <div class="post_author_avatar">
              <img src="#" alt="">
            </div>
            <div class="post_author_info">
              <h5>by:sasasas</h5>
              <small>February14, 2023</small>
            </div>

          </div>
        </div>

      </article>

   

     

    </div>
  </section>

  <!--======================================End of Post==================================-->

<section class="category_buttons">
  <div class="category_buttons-container">
    <a href="" class="category_button">Art</a>
    <a href="" class="category_button">Wild</a>
    <a href="" class="category_button">Travel</a>
    <a href="" class="category_button">Tech</a>
    <a href="" class="category_button">Food</a>
    <a href="" class="category_button">Music</a>
  </div>
</section>

<?php include 'template/footer.php';?>