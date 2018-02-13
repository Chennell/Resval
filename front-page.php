<!--      Header        -->
<?php get_header();?>
<main class="front">
  <div class="frontPageContainer">

    <?php //do_shortcode('[wcp-carousel id="88"]')
    //echo do_shortcode('[wcp-carousel id="57"]');

?>

    <!--    Top section About section  ------------------------------------------------->
    <div class="topSectionFP">
      <div class="topLeftFP">

        <!--    The image      -->
        <div class="div_topp_img_hem">
          <img src="<?php //the_field('topp_bild'); ?>" alt="" class="topp_img_hem">
        </div>
      </div>

      <div class="topRightFP">
        <!-- The text -->
        <div class="div_topp_text_hem">
          <div class="title_FP">
            <h2> <?php the_field('topp_titel'); ?></h2>
          </div>

          <p><?php the_field('topp_text'); ?></p>

          <!-- The button -->
          <div class="buttonContainerFP">
            <a href="<?php the_field('fremsid_knapp'); ?>">
              <button type="button" name="button">
                <?php the_field('fremsida_knapp_label'); ?>
              </button>
            </a>
          </div>
        </div>
      </div>

    </div>



    <!--  Middle section     -------------------------------->
    <!--  Most popular views   -->
    <div class="mostPopularProjectsFP">
      <h2 class="section-title">Our latest Projects</h2>

      <div class="flexslider">
        <ul class="slides">
            <?php
            $args = array(
              'post_type'       =>  'project',
              'posts_per_page'  => -1,
              'orderby' => 'date'
            );

            $projects_query = new WP_Query($args);
            if ($projects_query->have_posts()): while ($projects_query->have_posts()): $projects_query->the_post(); ?>
              <li class="a-project">
                <a href="<?php the_permalink()?>">
                    <div class="opacity-box"><h3 class="title-grid"> <?php the_title(); ?></h3></div>
                </a>
                <a href="<?php the_permalink()?>">
                    <div class="hover-box">
                        <p>
                           <?php
                                the_field('hover_description');
                            ?>
                        </p>
                    </div>
                </a>
                <a href="<?php the_permalink()?>">
                    <?php the_post_thumbnail('grid_thumbnail'); ?>
                </a>
              </li>
              <?php
                  endwhile; endif;
              ?>


          </ul>

     </div>
     <?php //echo do_shortcode('[wcp-carousel id="217"]') ?>
    </div>


    <!--  Contact info     -------------------------------->
<?php wp_reset_query(); ?>
   <div class="contactbackground">
    <div class="contactInfoFP">
      <div class="title_FP">

        <h2><?php the_field('kontakt_titel'); ?></h2>

      </div>
      <p><?php the_field('kontakt_text'); ?></p>

      <!-- The button -->
      <div class="contactButtonContainerFP">
        <a href="<?php the_field('kontakt_knapp'); ?>">
          <button type="button" name="button">
            <?php the_field('kontakt_knapp_label'); ?>
          </button>
        </a>
      </div>
    </div>
   </div>

   <!--  Sponsor logo     -------------------------------->

   <div class="logoContainerFooter">
     <ul>
   <?php
      if( have_rows('sponsrade_loggor_repeater') ):
     // loop through the rows of data
     while ( have_rows('sponsrade_loggor_repeater') ) : the_row(); ?>
     <!-- Place somewhere in the <body> of your page -->
        <li class="project-image">
            <div>
              <a href="<?php echo wp_get_attachment_image_url(the_sub_field('sponsrade_url')); ?>">
                <img src="<?php echo wp_get_attachment_image_url(the_sub_field('sponsrade_loggor')); ?>" alt="">
              </a>
            </div>
        </li>
        <?php endwhile; endif;?>
      </ul>
   </div>






</main>
<!--     Footer       -->
<!--<script src=" //get_template_directory_uri(); ?>/js/frontpage.js"></script>-->
<?php get_footer(); ?>
