<main>

       <!-- Get Post Content -->
       <?php if (have_posts()): while (have_posts()): the_post();?>

           <!-- wrapper for left column -->
         <div class="column-left">
           <!-- Get Featured Image -->
           <?php the_post_thumbnail( 'single_large' ); ?>
         </div>
         <!-- wrapper for right column -->
         <div class="column-right">
           <div class="fadeGradient"></div>
           <div class="scroll-y">
             <h2 class="page-title"><?php the_title(); ?></h2>
             <!-- Get Page Content (Text) -->
             <?php the_content(); ?>
             <!-- Sponsor Area -->
             <div class="sponsor-area">
               <?php
                  if( have_rows('sponsrade_loggor_repeater') ):
                 // loop through the rows of data
                 while ( have_rows('sponsrade_loggor_repeater') ) : the_row(); ?>
                 <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                  <ul class="slides">
                    <li class="sponsor-container">
                      <a href="<?php the_sub_field('sponsrade_url'); ?>">
                        <img class="sponsor-logo" src="<?php echo wp_get_attachment_image_url(the_sub_field('sponsrade_loggor'), 'about_logo'); ?>" />
                      </a>
                    </li>
                  </ul>
                </div>
                <?php endwhile; endif;?>
             </div>

             </div>
           </div>


      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>
