<?php get_header(); ?>

<section class="main-content container-fluid row">

    <?php get_sidebar ('left'); ?>

    <article class="main-content__actu col-lg-6 col-md-12">
        <div class="main-content__actu--padding">

            <?php 
     
if ( have_posts() ) {
    
	while ( have_posts() ) {
        
		the_post(); ?>



            <h2 class="main-content__actu--title">
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="main-content__actu--text">
                <?php the_excerpt(); ?>
            </p>
            <p><a class="main-content__actu--text" href="<?php the_permalink(); ?>">Continuer la lecture &raquo;</a></p>



            <?php	 }
}
?>
        </div>
    </article>

    <?php get_sidebar ('right'); ?>

</section>

<?php get_footer(); ?>