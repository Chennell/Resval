
<?php get_header(); ?>

<main>

       <!-- Get Post Content -->
       <?php if (have_posts()): while (have_posts()): the_post();?>
         <!-- wrapper for left column -->
       <div class="column-left">
         <!-- Get Featured Image -->
          
           
            
       </div>
       <!-- wrapper for right column -->
       <div class="column-right">
         <div class="form-container bidra">
           <h2 class="page-title"><?php the_title(); ?></h2>
           <!-- Get Page Content (Text) -->
           <?php the_content(); ?>

           <?php dynamic_sidebar('bidra-form'); ?>

         </div>
        </div>
      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>

<?php get_footer(); ?>
