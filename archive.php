<?php

    get_header()?>
    <div class="post-grid">
    <?php
    $args = array(
      'post_type'       =>  'project',
      'posts_per_page'  => -1,
    );
    $project_query = new WP_Query($args);

    //$my_query = new WP_Query($args);
      
    //--- GETS the post types, filters.
    $terms = get_terms(array('taxonomy' => 'project', 'hide_empty' => true ));
    foreach ($terms as $value) { 
    ?>
    <span class="project_type">
        <a href="/project_type/<?php echo $value->slug ?>">
            <?php echo $value->name ?>
        </a>
    </span>
<?php
    }

?>
<!--THIS loops through and displays the projects-->
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