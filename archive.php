<?php

    get_header()?>
    <div class="post-grid">
    <?php
    $args = array(
      'post_type'       =>  'project',
      'posts_per_page'  => 6,
    );

?>
<!--THIS loops through and displays the projects-->
<div class="gridParent">
    <?php
    if ($projects_query->have_posts()): while ($projects_query->have_posts()): $projects_query->the_post();

        get_template_part('partials/postgrid');

        endwhile; endif;
    ?>
</div> 

<?php
    get_footer() 

?> 