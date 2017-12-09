<main>
<div class="column-left">
  <!-- Get Featured Image -->
  <?php if (have_posts()): while (have_posts()): the_post();?>
  <!-- IMAGE SLIDER ----------------------------------------------------------->
  <div class="image-slider">
    <div class="flexslider">
      <ul class="slides">
        <!-- include featured image -->
        <!-- <li class="project-image">
            <?php //the_post_thumbnail( 'single_large' ); ?>
            <span class="project-image-caption"><?php //the_sub_field('image_description') ?></span>
        </li> -->
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
      <div class="description-section">
        <h4>I korthet </h4>
        <span class="description"><?php the_field( 'decscription_short' ); ?></span>
      </div>
      <div class="description-section">
        <div class="expander-container">
          <button onclick="expander" class="expander-trigger">
           <h4 class="icon-handle">Ni behöver</h4>
         </button>
          <div class="expanding-area" class="expanding-area">
            <span><?php the_field('description_ingeredients') ?></span>
          </div>
        </div>
      </div>
      <div class="description-section">
        <h4>Gör så här</h4>
        <span class="description"><?php the_field( 'description_procedure' ); ?></span>
      </div>
      <div class="description-section">
        <h4>Resultat</h4>
        <span class="description"><?php the_field( 'description_result' ); ?></span>
      </div>
      <div class="description-section">
        <div class="expander-container">
        <button onclick="expander" class="expander-trigger">
           <h4 class="icon-handle">Mer detaljer</h4>
         </button>
          <div class="expanding-area" class="expanding-area">
            <span class="description"><?php the_field( 'description_details' ); ?></span>
          </div>
        </div>
      </div>
      <div class="description-section">
        <div class="expander-container">
          <button onclick="expander" class="expander-trigger">
           <h4 class="icon-handle">Kontakt</h4>
         </button>
          <div class="expanding-area" class="expanding-area">
            <span><?php the_field('kontakt_person') ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
<?php endwhile; endif;?>
</main>

<?php


?>
