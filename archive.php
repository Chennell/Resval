<?php

    get_header()?>
    <div class="post-grid">
        <div class="search_form">
            <?php
                get_search_form();
            ?>
        </div>

        <?php
        $args = array(
          'post_type'       =>  'project',
          'posts_per_page'  => -1,
        );
        $project_query = new WP_Query($args);

        //$my_query = new WP_Query($args);?>
        <div class="filterbox">
            <ul class="project_type"><?php
        //--- GETS the post types, filters.
        $terms = get_terms(array('taxonomy' => 'project', 'hide_empty' => true ));
        foreach ($terms as $value) { 
            ?>
           
                    <li class="filter">
                        <a href="/project_type/<?php echo $value->slug ?>">
                            <?php echo $value->name ?>
                        </a>
                    </li>
            
    <?php
        }

?>    
       </ul>
    </div>
<!--THIS loops through and displays the projects-->
    <ul class="gridParent">
        <?php
            if ($project_query->have_posts()): while ($project_query->have_posts()): $project_query->the_post();
        ?>
            <li class="a-project">
               <?php
                    get_template_part('partials/project-grid');
                ?>
            </li>
        <?php
            endwhile; endif;
        ?>
    </ul>
</div> 

<?php
    get_footer() 

?> 