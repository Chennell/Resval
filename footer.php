
<footer>
<div class="logofooter">
  <hr class="footerLine" />

  <!-- Old newsletter link -->
  <!-- <div class="footerlinks">
    <p>
      <a href="#">Prenumerera på nyhetsbrev</a>
    </p>
  </div> -->

  <div class="logoContainerFooter">
      <?php // dynamic_sidebar('footer-sidebar');?>

        <ul>
          <li>
            <div class="portraitlogo">
              <img src="<?php the_field('logotype_4');?>" alt="">
            </div>
          </li>

          <li>
            <div class="landscapelogo">
              <img src="<?php the_field('logotype_1');?>" alt="">
            </div>
          </li>

          <li>
            <div class="landscapelogo">
              <img src="<?php the_field('logotype_2');?>" alt="">
            </div>
          </li>

          <li>
            <div class="landscapelogo">
              <img src="<?php the_field('logotype_3');?>" alt="">
            </div>
          </li>
        </ul>
  </div>
</div>


<div class="smallfooter">
<ul>
  <li>
    <div class="contactInfoFP2">
      <div class="title_FP2">
        <h2><?php the_field('kontakt_titel'); ?></h2>
      </div>
      <p><?php the_field('kontakt_text'); ?></p>

      <!-- The button -->
      <div class="contactButtonContainerFP2">
        <button type="button" name="button">
          <a href="<?php the_field('kontakt_knapp'); ?>"><?php the_field('kontakt_knapp_label'); ?></a>
        </button>
      </div>
    </div>
  </li>

  <li>
    <div class="copyright">
      <p>
        <a href="#">Prenumerera på nyhetsbrev</a>
      </p>
        <p>© copyright - Hela Resan</p>

        <!-- <img src="<?php //the_field('logotype_1');?>" alt=""> -->
        <?php //wp_nav_menu( array( 'theme_location' => 'footer' ) );?>
      </div>

  </li>
</ul>





</div>

</footer>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
