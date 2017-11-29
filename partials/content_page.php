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
         <div class="scroll-y">
           <h2 class="page-title"><?php the_title(); ?></h2>
           <!-- Get Page Content (Text) -->
           <?php the_content(); ?>
           <!-- Sponsor Area -->
           <div class="sponsor-container">
             <a href="<?php the_field('sponsrade_url'); ?>">
               <img src="<?php echo wp_get_attachment_image_url(get_field('sponsrade_loggor'), 'about_logo'); ?>" />
             </a>
           </div>

         </div>
        </div>
      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>
