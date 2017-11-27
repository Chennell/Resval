<?php $homeurl = home_url(); ?>

<header>
  <div id="logocontainer">
    <a href="<?php echo $homeurl; ?>">
      <img src="<?php header_image();?>" alt="" class="logo"/>
    </a>
  </div>

    <!-- <a href="<?php home_url(); ?>"><h1><?php /* gets the site name*/bloginfo('name'); ?></h1></a> -->

    <div id="mainmenu">
      <nav>
           <?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) );?>
      </nav>
    </div>
</header>
<!-- <aside>
    <?php dynamic_sidebar('site-description'); ?>
    <div class="line"><hr></div>
</aside> -->
