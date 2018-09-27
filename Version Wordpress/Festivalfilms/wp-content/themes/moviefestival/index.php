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