
<a href="<?php the_permalink()?>">
    <h3 class="title-grid"> <?php the_title(); ?></h3>
</a>
<div class="info-box">
    <p>
        This is some random content about the project.
    </p>
</div>
<a href="<?php the_permalink()?>">
    <?php the_post_thumbnail('grid_thumbnail'); ?>
</a>
