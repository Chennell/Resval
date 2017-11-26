<?php get_header(); ?>

<h1>This is the front-page.php</h1>
<?php
         if (have_posts()){
           while (have_posts()){

             the_title();
             the_post();
             //the_post_thumbnail('single_large');
             the_content();

           }
         }
       ?>


<?php get_footer(); ?>
