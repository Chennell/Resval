<!--      Header        -->
<?php get_header();?>

<div class="frontPageContainer">
  <?php do_shortcode(
    '[wcp-carousel id="57"]'
    ) ?>


  <!--    Top section About section  ------------------------------------------------->
  <div class="topSectionFP">
    <div class="topLeftFP">
      <!--    The image      -->
      <div class="div_topp_img_hem">
        <img src="<?php the_field('topp_bild'); ?>" alt="" class="topp_img_hem">
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
          <button type="button" name="button">
            <a href="<?php the_field('fremsid_knapp'); ?>"><?php the_field('fremsida_knapp_label'); ?></a>
          </button>
        </div>
      </div>
    </div>

  </div>



  <!--  Middle section     -------------------------------->
  <!--  Most popular views   -->
  <div class="mostPopularProjectsFP">
    <!-- <div class="title_FP">
      <h2>Most popular projects</h2>
    </div>


<!-- PROJECT SLIDER ----------------------------------------------------------->
    <!-- Carousel slider -->
    <?php //the_content(); ?>
  </div>

  <!-- Flexslider -->

  <div class="project-slider">
    <div class="flexslider">
      <ul class="slides">
    <?php
       if( have_rows('project_slider') ):
      // loop through the rows of data
      while ( have_rows('project_slider') ) : the_row();
        $project = get_sub_field('project_on_front_page');
        $projectTitle = $project->post_title;
        $projectImage = get_the_post_thumbnail($project, 'about_logo');
        $projecturl = get_permalink($project)
      ?>
      <!-- Place somewhere in the <body> of your page -->
         <li class="singleProjectSlider">
             <div class="projectSliderdiv">

             <span class="">
                <?php echo $projectImage; ?>
               <a href="<?php echo $projecturl ?>">
                 <h2>
                   <?php echo $projectTitle; ?>
                 </h2>
                 </a>
            </span>
             </div>
         </li>
         <?php endwhile; endif;?>
       </ul>
     </div>
  </div>




  <!--  Last section     -------------------------------->
  <!--  Contact info   -->
 <div class="contactbackground">


  <div class="contactInfoFP">
    <div class="title_FP">
      <h2><?php the_field('kontakt_titel'); ?></h2>
    </div>
    <p><?php the_field('kontakt_text'); ?></p>

    <!-- The button -->
    <div class="contactButtonContainerFP">
      <button type="button" name="button">
        <a href="<?php the_field('kontakt_knapp'); ?>"><?php the_field('kontakt_knapp_label'); ?></a>
      </button>
    </div>
  </div>
 </div>


</div>
<!--     Footer       -->
<?php get_footer(); ?>
