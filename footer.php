
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

  <div class="copyright">
    <p>© copyright - Hela Resan</p>
    <!-- <img src="<?php //the_field('logotype_1');?>" alt=""> -->
    <?php //wp_nav_menu( array( 'theme_location' => 'footer' ) );?>
  </div>


</footer>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
