
<footer>

<div class="smallfooter">
      <div class="footer-text">
        <p class="newsletter">
          <a href="<?php the_field('footer_link') ?>">Prenumerera på nyhetsbrev</a>
        </p>

        <div id="footer-logo-container" align="right">
            <ul>
              <?php dynamic_sidebar('footer-sidebar');?>
            </ul>
        </div>

          <p class="copyright">© copyright - Hela Resan</p>
        </div>
</div>

</footer>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
