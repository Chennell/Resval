<main>
<h1>I'm page-framgangsfaktorer.php </h1>
       <!-- Get Post Content -->
       <?php if (have_posts()): while (have_posts()): the_post();?>


             <h2 class="page-title"><?php the_title(); ?></h2>
             <!-- Get Page Content (Text) -->
             <?php the_content(); ?>



      <!-- Stop while loop and if statement -->
       <?php endwhile; endif;?>
</main>
