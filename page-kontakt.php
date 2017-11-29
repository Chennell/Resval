
<?php get_header(); ?>

<main>

       <!-- Get Post Content -->
       <?php if (have_posts()): while (have_posts()): the_post();?>
         <!-- wrapper for left column -->
       <div class="column-left">
         <!-- Get Featured Image -->
         <div class="contact-container">
           <span class="contact-content"><?php the_field( 'kontakt_person' ); ?></span>
           <span class="contact-content"><?php the_field( 'telefonnummer' ); ?></span>
           <span class="contact-content"><?php the_field( 'email' ); ?></span>
           <span class="contact-content"><?php the_field( 'adress' ); ?></span>
           <span class="contact-content"><?php the_field( 'beskrivning' ); ?></span>
         </div>
       </div>
       <!-- wrapper for right column -->
       <div class="column-right">
         <div class="form-container">
           <h2 class="page-title"><?php the_title(); ?></h2>
           <!-- Get Page Content (Text) -->
           <?php the_content(); ?>

           <?php dynamic_sidebar('contact-form'); ?>

         </div>
        </div>
      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>

<?php get_footer(); ?>
