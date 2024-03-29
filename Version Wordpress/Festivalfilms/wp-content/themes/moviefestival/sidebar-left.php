<!-- Formulaire inscription aux films du festival -->
    <aside class="main-content__form col-lg-3 col-md-12 animated fadeInLeft">
        <div class="main-content__form--padding">
            <form method="post">
        <label for="prenom">Prénom</label>
        <input class="main-content__form--input" pattern="[a-zA-Z0-9 ]+" id="prenom" type="text" name="prenom" required>

        <label for="nom">Nom</label>
        <input class="main-content__form--input" pattern="[a-zA-Z0-9 ]+" id="nom" type="text" name="nom" required>

        <label for="email">Email</label>
        <input class="main-content__form--input" id="email" type="email" name="email" required>

        <fieldset class="main-content__form--checkbox">
            <legend class="main-content__form--legend">Sélection des films</legend>

            <input type="checkbox" id="laHaine" name="films[]" value="La Haine">
            <label for="laHaine">La Haine</label>

            <input type="checkbox" id="odyssee" name="films[]" value="l'Odyssée de l'espace">
            <label for="odyssee">l'Odyssée de l'espace</label>

            <input type="checkbox" id="requiem" name="films[]" value="Requiem for a dream">
            <label for="requiem">Requiem for a dream</label>

            <input type="checkbox" id="mulholland" name="films[]" value="Mulholland Drive">
            <label for="mulholland">Mulholland Drive</label>

            <input type="checkbox" id="Carnage" name="films[]" value="Carnage">
            <label for="Carnage">Carnage</label>

            <input type="checkbox" id="under" name="films[]" value="Under the skin">
            <label for="under">Under the skin</label>

            <input type="checkbox" id="edward" name="films[]" value="Edward aux mains d'argent">
            <label for="edward">Edward aux mains d'argent</label>

            <input type="checkbox" id="lost" name="films[]" value="Lost in translation">
            <label for="lost">Lost in translation</label>
        </fieldset>

        <input class="main-content__form--input" name="submit" type="submit" value="S'inscrire">
    </form>
            <div class="main-content__form--text">
                <p>
                    Des questions ?
                    <br> N'hésitez pas à nous <a class="main-content__form--link" href="contact.html">contacter</a>
                </p>
            </div>
        </div>
    </aside>