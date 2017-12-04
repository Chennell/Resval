
<div class="column-left">
  <!-- Get Featured Image -->
  <!-- IMAGE SLIDER ----------------------------------------------------------->
  <div class="image-slider">
    <div class="flexslider">
      <ul class="slides">
        <li class="project-image">
            <?php the_post_thumbnail( 'single_large' ); ?>
            <span class="project-image-caption"><?php the_sub_field('image_description') ?></span>
        </li>
    <?php
       if( have_rows('image_repeater') ):
      // loop through the rows of data
      while ( have_rows('image_repeater') ) : the_row(); ?>
      <!-- Place somewhere in the <body> of your page -->
         <li class="project-image">
             <img src="<?php echo wp_get_attachment_image_url(the_sub_field('project_image'), 'about_logo'); ?>" />
             <span class="project-image-caption"><?php the_sub_field('image_description') ?></span>
         </li>
         <?php endwhile; endif;?>
       </ul>
     </div>
  </div>
</div>
<!-- wrapper for right column -->
<div class="column-right">
  <div class="scroll-y">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <!-- INGREDIENTS AREA ----------------------------------------------------->
    <div class="ingredients-container">
      <!-- effort -->
      <span class="effort">
        <?php if(get_field( 'projekt_effort' )== "Easy"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/effort-low.png" alt="Low Effort" title="Effort:Easy">
        <?php }
        else if(get_field( 'projekt_effort' )== "Medium"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/effort-middle.png" alt="Medium Effort" title="Effort:Moderate">
        <?php }
        else if(get_field( 'projekt_effort' )== "Hard"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/effort-high" alt="High Effort" title="Effort:Hard">
        <?php }?>
      </span>
      <!-- time -->
      <span class="time"><?php
        if(get_field( 'projekt_time' )== "Little"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time-low.png" alt="Low" title="low time">
        <?php }
        else if(get_field( 'projekt_time' )== "Moderate"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time-middle.png" alt="Moderate Time" title="moderate time">
        <?php }
        else if(get_field( 'projekt_time' )== "A Lot"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time-high.png" alt="High Time" title="high time">
        <?php }?>
      </span>
      <!-- target group -->
      <span class="groupsize"><?php
        if(get_field( 'project_group-size' )== "1-10"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/countryside.png" alt="Low Size" title="low size">
        <?php }
        else if(get_field( 'project_group-size' )== "10-50"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/city.png" alt="Medium Size" title="medium size">
        <?php }
        else if(get_field( 'project_group-size' )== "50-100"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/citycountryside.png" alt="High Size" title="high size">
        <?php }?>
      </span>
      <!-- budget -->
      <span class="budget">
          <?php if(get_field( 'projekt_budget' )== "Low"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget-low.png" alt="Low Budget" title="low budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "Moderate"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget-middle.png" alt="Medium Budget" title="medium budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "High"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget-high.png" alt="High Budget" title="high budget">
          <?php }?>
      </span>
    </div>
    <!-- DESCRIPTION ---------------------------------------------------------->
    <div class="project-description">
      <span class="description"><?php the_field( 'projekt_description' ); ?></span>
      <div class="expander-container">
        <a href="#" id="expander-trigger" class="expander-trigger">
         Kontakt
        </a>
        <div id="expanding-area" class="expanding-area">
          <p><?php the_field('kontakt_person') ?></p>
        </div>
      </div>
    </div>
  </div>
 </div>



<?php


?>
