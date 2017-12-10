
<?php get_header(); ?>

<main>

       <!-- Get Post Content -->
       <?php if (have_posts()): while (have_posts()): the_post();?>
         <!-- wrapper for left column -->
       <div class="column-left">
         <!-- Get Featured Image -->
         <div class="contact-container">
           <span class="contact-content"><?php the_field( 'beskrivning' ); ?></span>
           <br>
           <br>
           <span class="contact-content"><?php the_field( 'kontakt_person' ); ?></span>
           <br>
           <span class="contact-content"><?php the_field( 'telefonnummer' ); ?></span>
           <br>
           <span class="contact-content"><?php the_field( 'email' ); ?></span>
           <br>
           <span class="contact-content"><?php the_field( 'adress' ); ?></span>

         </div>
       </div>
       <!-- wrapper for right column -->
       <div class="column-right">
         <div class="scroll-y">
           <div class="form-container">
             <h2 class="page-title"><?php the_title(); ?></h2>
             <!-- Get Page Content (Text) -->
             <?php the_content(); ?>

             <?php dynamic_sidebar('contact-form'); ?>

           </div>
         </div>

        </div>
      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>

<?php get_footer(); ?>
