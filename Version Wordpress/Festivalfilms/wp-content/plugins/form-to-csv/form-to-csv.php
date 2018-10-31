<?php
/*
    Plugin Name: Form to CSV
    Version: 1.0
    Author: Grégory Huyghe
*/


// 1. Shortcode
function ftc_shortcode() {
    readfile("form-to-csv.html", 1);
}

add_shortcode( 'form_csv', 'ftc_shortcode' );

// 1.1 CSS
function ftc_style() {
    wp_register_style('stylesheet', plugins_url('form-to-csv.css', __FILE__));
    wp_enqueue_style('stylesheet');
}

add_action('admin_init', 'ftc_style');


// 2. Onglet plugin dans panneau admin pour voir et télécharger les données collectées
function ftc_menu_item() {
    add_menu_page(
        __( 'Form to CSV', 'textdomain' ),
        'Form to CSV',
        'manage_options',
        'form-to-csv',
        'ftc_menu_plugin',
        'dashicons-portfolio',
        21
    );
}
add_action('admin_menu', 'ftc_menu_item');


// 3. Ecrire les données dans un fichier
function ftc_form_html() {
    


    // 3.1 Variables
    $error = '';
    $fname = sanitize_text_field($_POST['prenom']);
    $lname = sanitize_text_field($_POST['nom']);
    $email = sanitize_email($_POST['email']);
    $checkbox = implode(" / ", (array)$_POST['films']);

    // 3.2 Clean_text
    function clean_text($clean) {
        $trimmed = trim($clean);
        $stripped = stripslashes($clean);
        $special = htmlspecialchars($clean);
        return $clean;
    }

    // 3.3 Submission form
    if(isset($_POST['submit'])) {
        $success = true;

        if(empty($_POST['prenom']) OR empty($_POST['nom']) OR empty($_POST['email'])) {
            $error = '<p>Veuillez réessayer</p>';
        } else {
            $fname = clean_text($_POST['prenom']);
            $lname = clean_text($_POST['nom']);
            $email = clean_text($_POST['email']);
            }

        if($error == '' && $success = true) {

            // Ecriture dans fichier csv
            $file_open = fopen('C:\Users\huygh\Desktop\form-to-csv.csv', 'a');
            $index = count(file('C:\Users\huygh\Desktop\form-to-csv.csv')); 
            if ($index == 0) {
                $index = $index +1;
            } else if ($index > 0) {
                $index = $index +1;
            }

            $form_data = array(
            'id' => $index,
            'prenom' => $fname,
            'nom' => $lname,
            'email' => $email,
            'films' => $checkbox
        );
            fputcsv($file_open, $form_data);
            header( 'Location: index.php' );
            exit();
        }           
    }

}

add_action('wp_loaded', 'ftc_form_html');
// 4. Récupérer ses infos dans un custom post accessible depuis le panneau admin. Pas d'envoi de mail.

// 4.1 Récupérer et  Afficher les données dans l'onglet du plugin

function ftc_menu_plugin() {
    
    $file_location = 'C:\Users\huygh\Desktop\form-to-csv.csv';
    if (file_exists($file_location)) {
        
        $counter = 0;

        echo "<html><body><table>\n\n";

        // Titres du tableau
        echo "<thead>";
        echo "<tr class=\"titles\">";
        echo "<th>ID</th>";
        echo "<th>Prénom</th>";
        echo "<th>Nom</th>";
        echo "<th>Email</th>";
        echo "<th>Sélection</th>";
        echo "</tr>\n";
        echo "</thead>";
        
        
        if (($file_read = fopen('C:\Users\huygh\Desktop\form-to-csv.csv', 'r')) !== FALSE) {
            while (($data = fgetcsv($file_read)) !== FALSE && $counter < 20) {
                echo "<tr>";
                $counter++;
                foreach ($data as $cell) {
                    echo stripslashes( "<td>" . $cell . "</td>" );
                }
                echo "</tr>\n";
            }
        }
        fclose($file_read);
        echo "\n</table></body></html>";

        // 4.2 Télécharger ce fichier .csv depuis l'onglet du plugin

        ?>
        <a href="/Festivalfilms/wp-content/plugins/form-to-csv/download.php">
            <button class="button__csv">Télécharger fichier CSV</button>
        </a>

        <a href="/Festivalfilms/wp-content/plugins/form-to-csv/delete.php">
            <button class="button__csv button__csv--delete">Supprimer données</button> 
        </a>
        <?php 

    } else {
        echo "<div class=\"no-csv\">";
        echo stripslashes("<p>Aucune inscription n\'a pour l\'instant été enregistrée.</p>");
        echo "</div>";
    }
}

    
 
    
