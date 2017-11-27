<!--      Header        -->
<?php get_header();?>


<!--    Top section   ------------------------------------------------->
<!-- The image -->
<div class="div_topp_img_hem">
  <img src="<?php the_field('topp_bild'); ?>" alt="" class="topp_img_hem">
</div>

<!-- The text -->
<div class="div_topp_text_hem">
  <h2> <?php the_field('topp_titel'); ?></h2>

  <p><?php the_field('topp_text'); ?></p>
</div>

<!-- The button -->

<button type="button" name="button">
  <a href="">Text here</a>
</button>




<!--     Footer       -->
<?php get_footer(); ?>
