
<footer>

<div class="smallfooter">
      <div class="footer-text">
        <ul>

          <li>
            <p class="newsletter">
              <a href="<?php the_field('footer_link'); ?>"><?php the_field('footer_link_label'); ?></a>
            </p>
          </li>

          <li>
            <div id="footer-logo-container" align="right">
                <ul>
                  <?php dynamic_sidebar('footer-sidebar');?>
                </ul>
            </div>
          </li>
        </ul>

        <p class="copyright">© copyright - Hela Resan</p>
    </div>
</div>

</footer>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
