<?php get_header(); ?>
<main>
<h1>I'm page-framgangsfaktorer.php </h1>

  <h2 class="page-title"><?php the_title(); ?></h2>
   <!-- Get Post Content -->
   <?php if (have_posts()): while (have_posts()): the_post();?>
   <?php
      if( have_rows('framgangsfaktor') ):
     // loop through the rows of data
     while ( have_rows('framgangsfaktor') ) : the_row(); ?>
     <div class="expander-container">
       <a href="#" id="expander-trigger">
        <?php the_sub_field('framgangsfaktor_title') ?>
       </a>
       <div id="expanding-area">
         <p><?php the_sub_field('framgangsfaktor_description') ?></p>
       </div>
     </div>
     <?php endwhile; endif; ?>
      <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
