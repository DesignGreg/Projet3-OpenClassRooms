<?php get_header(); ?>
  
  <section class="main-content container-fluid row">

    <?php get_sidebar ('left'); ?>

    <!-- Contenu principal de chaque page -->
        <article class="main-content__films col-lg-6 col-md-12">
            <div class="main-content__films--padding">
                <div id="carouselExampleIndicators" class="main-content__films--carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/2001odysseedelespace.jpg" alt="First slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/carnage.jpg" alt="Second slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/edwardmainsdargent.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/LaHaine.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/lostintranslation.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/mulhollanddrive.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/requiemforadream.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/undertheskin.jpg" alt="Third slide">
                            <p class="main-content__home--text">
                                L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                            </p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </article>
        
<?php get_sidebar ('right'); ?>

</section>
  


<?php get_footer();?>