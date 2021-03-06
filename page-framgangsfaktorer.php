<?php get_header(); ?>
<main>
<div class="content-wrapper">
  <h2 class="page-title"><?php the_title(); ?></h2>

    <!-- Get Post Content -->
    <?php if (have_posts()): while (have_posts()): the_post();?>
    <?php
       if( have_rows('framgangsfaktor') ):
      // loop through the rows of data
      while ( have_rows('framgangsfaktor') ) : the_row(); ?>
      <div class="framgangsfaktor-container">
        <div class="expander-container">
          <button onclick="framgangsfaktor" class="framgangsfaktor-trigger framgangsfaktor">
           <?php the_sub_field('framgangsfaktor_title') ?>
         </button>
          <div class="expanding-area">
            <p class="framgangsfaktor_description"><?php the_sub_field('framgangsfaktor_description') ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
         <?php endwhile; endif; ?>
      </div>



</div>

</main>

<?php get_footer(); ?>
