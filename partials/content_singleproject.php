
<div class="column-left">
  <!-- Get Featured Image -->
  <?php the_post_thumbnail( 'single_large' ); ?>
</div>
<!-- wrapper for right column -->
<div class="column-right">
  <div class="scroll-y">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <div class="ingredients-container">
      <span class="effort"><?php the_field( 'projekt_effort' ); ?></span>
      <span class="time"><?php the_field( 'projekt_time' ); ?></span>
      <span class="groupsize"><?php the_field( 'project_group-size' ); ?></span>
      <span class="budget"><?php the_field( 'projekt_budget' ); ?></span>
      <!-- <span class="gallery"><?php //the_field( 'projekt_gallery' ); ?></span> -->
    </div>
    <div class="description">
      <span class="description"><?php the_field( 'projekt_description' ); ?></span>
      <span class="description"><?php the_field( 'kontakt_person' ); ?></span>
    </div>

    <!-- Sponsor Area -->
    <div class="sponsor-container">
      <a href="<?php the_field('sponsrade_url'); ?>">
        <img src="<?php echo wp_get_attachment_image_url(get_field('sponsrade_loggor'), 'about_logo'); ?>" />
      </a>
    </div>

  </div>
 </div>



<?php


?>
