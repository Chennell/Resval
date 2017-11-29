<!--      Header        -->
<?php get_header();?>

<div class="frontPageContainer">

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
            <a href="<?php the_field('fremsid_knapp'); ?>"><?php the_field('kontakt_knapp_label'); ?></a>
          </button>
        </div>
      </div>
    </div>

  </div>



  <!--  Middle section     -------------------------------->
  <!--  Most popular views   -->
  <div class="mostPopularProjectsFP">
    <div class="title_FP">
      <h2>Most popular projects</h2>
    </div>
    <ul>
      <li>
        <div class="">
          <p>Image<br> here!</p>
      </div>
      </li>
    </ul>
  </div>



  <!--  Last section     -------------------------------->
  <!--  Contact info   -->
  <div class="contactInfoFP">
    <div class="title_FP">
      <h2><?php the_field('kontakt_titel'); ?></h2>
    </div>
    <p><?php the_field('kontakt_text'); ?></p>
  </div>


</div>
<!--     Footer       -->
<?php get_footer(); ?>
