<?php get_header(); ?>
  
  <section class="main-content container-fluid row">

    <?php get_sidebar ('left'); ?>

    <article class="main-content__actu col-lg-6 col-md-12">
        <div class="main-content__actu--padding">
            
            
            <?php
    
    while(have_posts()) {
        the_post(); ?>
        <h2 class="main-content__actu--title"><?php the_title(); ?></h2>
        <p class="main-content__actu--text"><?php the_content(); ?></p>
   <?php }
       ?>     
            

        </div>
    </article>

    <?php get_sidebar ('right'); ?>
    
</section>
  


get_footer();

?>