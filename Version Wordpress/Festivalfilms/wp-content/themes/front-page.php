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
<!--
                    <label for="films">Sélection des films, maintenez la touche Ctrl enfoncée pour en sélectionner plusieurs</label>
                    <select class="main-content__form--input" name="films" id="films" size="4" multiple required>
                        <option value="lahaine">La Haine</option>
                        <option value="2001">2001:l'odyssée de l'espace</option>
                        <option value="requiem">Requiem for a dream</option>
                        <option value="mulhollanddrive">Mulholland Drive</option>
                        <option value="carnage">Carnage</option>
                        <option value="undertheskin">Under the skin</option>
                        <option value="edwardmainsdargent">Edward aux mains d'argent</option>
                        <option value="lostintranslation">Lost in translation</option>
                    </select>
-->
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
        <article class="main-content__home col-lg-6 col-md-12">
            <div class="main-content__home--padding">
                <h2 class="main-content__home--title">Présentation du Festival</h2>
                <p class="main-content__home--text">
                    L'association "Festival des Films de Plein Air" est fière de vous présenter ce festival qui se déroulera du 5 au 8 août, parc Monceay à Paris, et où seront projetés en plein air plusieurs films d'auteur.
                </p>
                <img class="main-content__home--image img-fluid" src="images/pleinair.jpg" alt="Film en plein air">
                <p class="main-content__home--text">
                    Ces projections auront lieu tous les soirs, de 18h à minuit.
                </p>
                <p class="main-content__home--text">
                    Cette initiative est animée par la présidente de l'association, Jennifer Viala, et possible grâce au soutien de la mairie de Paris.
                </p>
                <p class="main-content__home--text">
                    Pour découvrir la liste des films projetés pendant le festival, rendez-vous sur la page "films". Si vous venez, nous vous remercions de bien vouloir remplir le formulaire d'inscription sur votre gauche, qui nous permettra d'anticiper le nombre de participants.
                </p>
                <p class="main-content__home--text">
                    Au plaisir de vous voir au parc Monceau entre les 5 et 8 août.
                </p>
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