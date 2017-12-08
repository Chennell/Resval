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
        //--- GETS the post types, categories.
        $terms = get_terms(array('taxonomy' => 'project-cat', 'hide_empty' => true ));
                
//        $categorie_id = ;        
        
        foreach ($terms as $value) { 
            ?>
                
                    <?php if($value->slug == 'arbetspendling'){ ?>
              <li class="filter">          
                <a href="/project-cat/<?php echo $value->slug ?>">
                    <img src='<?= get_template_directory_uri(); ?>/img/effort-low.png' alt='Low Effort' title='Effort:Easy'>
                </a>
            </li>
            <?php } else if($value->slug == 'cykel') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/effort-middle.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'gang') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/effort-high.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'kampanjer-och-nudging') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'kollektivtrafik') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'ovrigt') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'resfritt') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'smart-bilanvandning') {?>                    
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }else if($value->slug == 'tjansteresor') {?>   
                <li class="filter">       
                    <a href="/project-cat/<?php echo $value->slug ?>">
                        <img src='<?= get_template_directory_uri(); ?>/img/time-low.png' alt='Low Effort' title='Effort:Easy'>
                    </a>
                </li>
                
    <?php
            }
        }
    ?>    
       </ul>
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

<?php
    get_footer() 
?> 





<!--
"<a href="/project-cat/<?php echo $value->slug ?>">
</a>"-->
