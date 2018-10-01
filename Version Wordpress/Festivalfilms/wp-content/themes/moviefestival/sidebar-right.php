<aside class="main-content__list col-lg-3 col-md-12 animated fadeInRight">
  <div class="main-content__list--padding">
   <?php 
                
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3
        ));

        while($homepagePosts -> have_posts()) {
            $homepagePosts -> the_post(); ?>
   
    
        <div class="main-content__list--article">
            <h3 class="main-content__list--title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
                <ul class="main-content__list--text">
                    <?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>">Continuez</a>
                </ul>
        

    </div>
    
    <?php } wp_reset_postdata();
    
    ?>
   </div> 
</aside>