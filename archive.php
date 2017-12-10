<?php

    get_header()?>
    <main>
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
            <div class="project_type"><?php
        //--- GETS the post types, categories.
        $terms = get_terms(array('taxonomy' => 'project-cat', 'hide_empty' => true ));
        $terms = get_terms(array('taxonomy' => 'project-topic', 'hide_empty' => true ));
        $terms = get_terms(array('taxonomy' => 'project-cost', 'hide_empty' => true ));
        $terms = get_terms(array('taxonomy' => 'project-difficulty', 'hide_empty' => true ));
        $terms = get_terms(array('taxonomy' => 'project-time', 'hide_empty' => true )); ?>

          <div class="filters">
          <?php echo do_shortcode( '[searchandfilter class="filters-form" type="checkbox,checkbox,checkbox,checkbox,checkbox,checkbox" hide_empty="0, 0, 0, 0, 0, 0" hierarchical="0, 0, 0, 0, 0, 0" fields="project-topic,project-cost,project-time,project-difficulty,project-location,project-organisation"  headings="Ämne,Kostnad,Tid,Svårighetsgrad, Mest lämpad plats, Mest lämpad organisationstyp"]' ); ?>
        </div>

      </div>
    </div>
<!--THIS loops through and displays the projects-->
    <ul class="gridParent">
        <?php
            if (have_posts()): while (have_posts()): the_post();
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
</main>
<?php
    get_footer()
?>





<!--
"<a href="/project-cat/<?php echo $value->slug ?>">
</a>"-->
