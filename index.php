<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php wp_title(''); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

  </head>
  <body>

  <!-- Start blog display -->


  <div class="wrapper">
    <!-- Header -->
    <div id="main-nav">
    <?php wp_nav_menu(array('theme_location' => 'main_nav', 'container' => '')); ?>
</div>
    <div class="header_wrap">

       <header role='banner' class="site_header">

         <!-- a href="<?php echo home_url(); ?>" class="logo"></a>  -->
         <a href="#" class="ghost-button">Hire me</a>
        <h1>
          <a href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
        <p>
          <a href="<?php echo home_url(); ?>">
            <?php bloginfo('description'); ?>
          </a>
        </p>
<!-- Place somewhere in the <body> of your page -->
      </header>

    </div>
    <!-- Posts Area -->
    <main class="posts_area">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post" role="article" itemscope itemtype="http://schema.org/Article">
          <h1 class="title">
            <a href="<?php the_permalink() ?>">
              <?php the_title(); ?>
            </a>
          </h1>
          <div class="post_meta">
            <time class="post_date" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
              <?php the_time(__('l, F, j, Y')); ?>
             <div class="tags">
              <p> <?php the_tags('Tagged:', '' ,'' ); ?></p>
            </div>
            </time>
          </div>
          <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">

          <?php the_content('Read More &raquo;'); ?>

          </div>
        </article>

      <?php endwhile; endif; ?>

      <div class="nav_links">
        <?php posts_nav_link(); ?>
      </div>

    </main>

    <!-- Footer -->

  <hr/>
<div id="footer-sidebar" class="secondary">
<div id="footer-sidebar1">
  <?php
  if(is_active_sidebar('footer-sidebar-1')){
  dynamic_sidebar('footer-sidebar-1');
  }
  ?>
</div>
<div id="footer-sidebar2">
  <?php
  if(is_active_sidebar('footer-sidebar-2')){
  dynamic_sidebar('footer-sidebar-2');
  }
  ?>
</div>
<div id="footer-sidebar3">
  <?php
  if(is_active_sidebar('footer-sidebar-3')){
  dynamic_sidebar('footer-sidebar-3');
  }
  ?>
</div>
<div id="footer-sidebar4">
  <?php
  if(is_active_sidebar('footer-sidebar-4')){
  dynamic_sidebar('footer-sidebar-4');
  }
  ?>
</div>
</div>
    <footer class="site_footer">
      2016 ©  Plamen Georgiev. WordPress developer.
    <div>
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-github" aria-hidden="true"></i>
      <i class="fa fa-wordpress" aria-hidden="true"></i>
      <i class="fa fa-stack-overflow" aria-hidden="true"></i>
    </div>
    </footer>

  </div>

  <!-- End blog display -->



<?php wp_footer(); ?>
</body>
</html>
