<div class="recipe-grid" id="recipe<?php the_ID()?>">
  <a href="<?php the_permalink() ?>">
    <img scr=" <?php echo wp_get_attachement_image_url(get_field('picture'), 'grid_size'); ?>" alt="" />
  </a>
  <table>
    <thead>

    </thead>
    <tr>
      <td class="td-head">Ingredients</td>
      <td><?php the_field('Ingredients') ?></td>
    </tr>
  </table>
</div>
