<?php get_header(); ?>
  
  <section class="main-content container-fluid row">

    <?php get_sidebar ('left'); ?>
    

    <article class="main-content__home col-lg-6 col-md-12">
        <div class="main-content__home--padding">
            
            <?php 
     
if ( have_posts() ) {
    
	while ( have_posts() ) {
        
		the_post(); ?>
            
        <h2><?php the_title(); ?></h2>
        <p class="main-content__home--text"><?php the_content(); ?></p>   
            
<?php	 }
}
?>            

        </div>
    </article>

  <?php get_sidebar ('right'); ?>
  
</section>
  


<?php get_footer();?>