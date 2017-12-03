
<footer>
<hr class="footerLine" />
<div class="logofooter">

  <p>
    <a href="#">Prenumerera på nyhetsbrev</a>
  </p>
  <div class="logoContainerFooter">
    <ul>
      <?php
        dynamic_sidebar('footer-sidebar');
        ?>
    </ul>
  </div>
</div>

  <div class="copyright">
    <p>© copyright - Hela Resan</p>
  </div>


</footer>
<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
