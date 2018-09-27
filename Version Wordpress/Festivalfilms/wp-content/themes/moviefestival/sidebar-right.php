<!-- Plugin affichant les derniers articles publiés -->
<aside class="main-content__list col-lg-3 col-md-12 animated fadeInRight">
    <div class="main-content__list--padding">
        <div class="main-content__list--article">
            <h3 class="main-content__list--title">
                <?php _e('Actu du festival'); ?></h3>
                <ul class="main-content__list--text">
                    <?php wp_get_archives('type=postbypost&limit=3'); ?>
                </ul>
        </div>

    </div>
</aside>