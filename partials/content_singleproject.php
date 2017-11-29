
<div class="column-left">
  <!-- Get Featured Image -->
  <?php the_post_thumbnail( 'single_large' ); ?>
    <!-- <span class="gallery"><?php //the_field( 'projekt_gallery' ); ?></span> -->
</div>
<!-- wrapper for right column -->
<div class="column-right">
  <div class="scroll-y">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <div class="ingredients-container">
      <span class="effort">
        <?php if(get_field( 'projekt_effort' )== "Easy"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/elephant.png" alt="Low Effort" title="Effort:Easy">
        <?php }
        else if(get_field( 'projekt_effort' )== "Medium"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/elephant.png" alt="Medium Effort" title="Effort:Moderate">
        <?php }
        else if(get_field( 'projekt_effort' )== "Hard"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/elephant.png" alt="High Effort" title="Effort:Hard">
        <?php }?>
      </span>
      <span class="time"><?php
        if(get_field( 'projekt_time_icon' )== "Little"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time.png" alt="Low" title="low time">
          <span class="icon-label"><?php the_field( 'projekt_time' ) ?></span>
        <?php }
        else if(get_field( 'projekt_time_icon' )== "Moderate"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time.png" alt="Moderate Time" title="moderate time">
          <span class="icon-label"><?php the_field( 'projekt_time' ) ?></span>
        <?php }
        else if(get_field( 'projekt_time_icon' )== "A Lot"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/time.png" alt="High Time" title="high time">
          <span class="icon-label"><?php the_field( 'projekt_time' ) ?></span>
        <?php }?>
      </span>
      <span class="groupsize"><?php
        if(get_field( 'project_group-size' )== "1-10"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/person.png" alt="Low Size" title="low size">
        <?php }
        else if(get_field( 'project_group-size' )== "10-50"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/person.png" alt="Medium Size" title="medium size">
        <?php }
        else if(get_field( 'project_group-size' )== "50-100"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/person.png" alt="High Size" title="high size">
        <?php }?>
      </span>
      <span class="budget">
          <?php if(get_field( 'projekt_budget' )== "Low"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget.png" alt="Low Budget" title="low budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "Moderate"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget.png" alt="Medium Budget" title="medium budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "High"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/budget.png" alt="High Budget" title="high budget">
          <?php }?>
      </span>
    </div>
    <div class="project-description">
      <span class="description"><?php the_field( 'projekt_description' ); ?></span>
      <span class="kontakt"><?php the_field( 'kontakt_person' ); ?></span>
    </div>
  </div>
 </div>



<?php


?>
