
<a href="<?php the_permalink()?>">
    <div class="opacityBox"><h3 class="title-grid"> <?php the_title(); ?></h3></div>
</a>
<div class="info-box">
    <p>
       <?php
            the_field(hover_description);
        ?>
    </p>
</div>
<a href="<?php the_permalink()?>">
    <?php the_post_thumbnail('grid_thumbnail'); ?>
</a>
