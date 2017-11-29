<?php

    get_header()?>
    <div class="post-grid">
    <?php
    $args = array(
      'post_type'       =>  'project',
      'posts_per_page'  => -1,
    );
echo "hej";
$project_query = new WP_Query($args);

?>
<!--THIS loops through and displays the projects-->
hej
<div class="gridParent">
    <?php
    
    if ($project_query->have_posts()): while ($project_query->have_posts()): $project_query->the_post();

        get_template_part('partials/project-grid');

        endwhile; endif;
    ?>
</div>
</div> 

<?php
    get_footer() 

?> 