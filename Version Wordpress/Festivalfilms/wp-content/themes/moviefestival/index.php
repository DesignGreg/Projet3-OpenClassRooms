<?php get_header(); ?>

<section class="main-content container-fluid row">

    <?php get_sidebar ('left'); ?>

    <article class="main-content__home col-lg-6 col-md-12">
        <div class="main-content__home--padding">

            <?php 
     
if ( have_posts() ) {
    
	while ( have_posts() ) {
        
		the_post(); ?>



            <h2 class="main-content__home--title">
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="main-content__home--text">
                <?php the_excerpt(); ?>
            </p>
            <p><a class="main-content__home--text" href="<?php the_permalink(); ?>">Continuer la lecture &raquo;</a></p>

            <?php	 }
    
    echo paginate_links();
}
?>
        </div>
    </article>

    <?php get_sidebar ('right'); ?>

</section>

<?php get_footer(); ?>