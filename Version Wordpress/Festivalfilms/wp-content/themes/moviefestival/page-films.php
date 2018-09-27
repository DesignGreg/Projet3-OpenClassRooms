<?php get_header(); ?>
  
  <section class="main-content container-fluid row">

    <!-- Formulaire inscription aux films du festival -->
    <aside class="main-content__form col-lg-3 col-md-12 animated fadeInLeft">
        <div class="main-content__form--padding">
            <form action="" method="post">
                <label for="prenom">Prénom</label>
                <input class="main-content__form--input" id="prenom" type="text" name="Prénom" required>
                <label for="nom">Nom</label>
                <input class="main-content__form--input" id="nom" type="text" name="Nom" required>
                <label for="email">Email</label>
                <input class="main-content__form--input" id="email" type="email" name="Adresse mail" required>
                <fieldset class="main-content__form--checkbox">
                    <legend class="main-content__form--legend">Sélection des films</legend>
                    <input type="checkbox" id="laHaine" name="films" value="La Haine">
                    <label for="laHaine">La Haine</label>
                    <input type="checkbox" id="odyssee" name="films" value="l'Odyssée de l'espace">
                    <label for="odyssee">l'Odyssée de l'espace</label>
                    <input type="checkbox" id="requiem" name="films" value="Requiem for a dream">
                    <label for="requiem">Requiem for a dream</label>
                    <input type="checkbox" id="mulholland" name="films" value="Mulholland Drive">
                    <label for="mulholland">Mulholland Drive</label>
                    <input type="checkbox" id="Carnage" name="films" value="Carnage">
                    <label for="Carnage">Carnage</label>
                    <input type="checkbox" id="under" name="films" value="Under the skin">
                    <label for="under">Under the skin</label>
                    <input type="checkbox" id="edward" name="films" value="Edward aux mains d'argent">
                    <label for="edward">Edward aux mains d'argent</label>
                    <input type="checkbox" id="lost" name="films" value="Lost in translation">
                    <label for="lost">Lost in translation</label>
                </fieldset>
                <input class="main-content__form--input" type="submit" value="S'inscrire">
            </form>
            <div class="main-content__form--text">
                <p>
                    Des questions ?
                    <br> N'hésitez pas à nous <a class="main-content__form--link" href="contact.html">contacter</a>
                </p>
            </div>
        </div>
    </aside>

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

    <!-- Plugin affichant les derniers articles publiés -->
    <aside class="main-content__list col-lg-3 col-md-12 animated fadeInRight">
        <div class="main-content__list--padding">
            <div class="main-content__list--article">
                <h3 class="main-content__list--title">Lancement du festival</h3>
                <p class="main-content__list--text">
                    Les premières projections vont débuter aujourd'hui à 18h. Il est encore temps de vous inscrire, nous vous ferons de la place !
                </p>
            </div>
            <div class="main-content__list--article">
                <h3 class="main-content__list--title">Bientôt le festival</h3>
                <p class="main-content__list--text">
                    Dans moins d'une semaine, le Festival des Films de Plein Air débutera, et vous êtes déjà nombreux à vous êtes inscrits.
                </p>
            </div>
            <div class="main-content__list--article">
                <h3 class="main-content__list--title">Un réalisateur sera présent</h3>
                <p class="main-content__list--text">
                    Nous aurons le plaisir d'accueillir Pierre Laurent, auteur-réalisateur de nombreux films indépendants, qui nous partagera son point de vue sur les films projetés.
                </p>
            </div>
        </div>
    </aside>
</section>
  


<?php get_footer();?>