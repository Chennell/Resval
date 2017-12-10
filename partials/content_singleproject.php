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
        <?php if(get_field( 'projekt_effort' )== "Låg"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/Level_color_lag.png" alt="Level Låg" title="Level Låg">
        <?php }
        else if(get_field( 'projekt_effort' )== "Mellan"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/Level_color_mellan.png" alt="Level Mellan" title="Level Mellan">
        <?php }
        else if(get_field( 'projekt_effort' )== "Hög"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/Level_color_hog.png" alt="Level Hög" title="Level Hög">
        <?php }?>
      </span>
      <!-- time -->
      <span class="time"><?php
        if(get_field( 'projekt_time' )== "Låg"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/tid_color_lag.png" alt="Low" title="Tid Låg">
        <?php }
        else if(get_field( 'projekt_time' )== "Mellan"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/tid_color_mellan.png" alt="Moderate Time" title="Tid Mellan">
        <?php }
        else if(get_field( 'projekt_time' )== "Hög"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/tid_color_hog.png" alt="High Time" title="Tid Hög">
        <?php }?>
      </span>
      <!-- target group -->
      <span class="groupsize"><?php
        if(get_field( 'project_audience' )== "Båda"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/org_color_both.png" alt="Both" title="Both">
        <?php }
        else if(get_field( 'project_audience' )== "Företag"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/org_color_foretag.png" alt="Företag" title="Företag">
        <?php }
        else if(get_field( 'project_audience' )== "Offentlig"){?>
          <img src="<?= get_template_directory_uri(); ?>/img/org_color_offentlig.png" alt="Offentlig" title="Offentlig">
        <?php }?>
      </span>
      <!-- budget -->
      <span class="budget">
          <?php if(get_field( 'projekt_budget' )== "Låg"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/kostnad_color_lag.png" alt="Low Budget" title="low budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "Mellan"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/kostnad_color_mellan.png" alt="Medium Budget" title="medium budget">
          <?php }
          else if(get_field( 'projekt_budget' )== "Hög"){?>
            <img src="<?= get_template_directory_uri(); ?>/img/kostnad_color_hog.png" alt="High Budget" title="high budget">
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
        <?php if( get_field('description_details') ): ?>
        <button onclick="expander" class="expander-trigger">
           <h4 class="icon-handle">Mer detaljer</h4>
         </button>
          <div class="expanding-area" class="expanding-area">
	             <span class="description"><?php the_field( 'description_details' ); ?></span>
          </div>
           <?php endif; ?>
        </div>
      </div>
      <div class="description-section">
        <div class="expander-container">
          <?php if( get_field('kontakt_person') ): ?>
          <button onclick="expander" class="expander-trigger">
           <h4 class="icon-handle">Kontakt</h4>
         </button>
          <div class="expanding-area" class="expanding-area">
            <span><?php the_field('kontakt_person') ?></span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
 </div>
<?php endwhile; endif;?>
</main>

<?php


?>
