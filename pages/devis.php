<?php
include '../../public_html/functions_56k99TfM5ZOj/function_devis_970VcSCmgvgnubZ.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Tim Fromentin Freelance</title>
</head>
<body>

    <div id="navbar"></div>
    
    <div id="loading-window">
        <div class="loader">
        </div>
    </div>

<section id="sec-devis">
    
        <form method="POST" id="devis_id" action="#end-contact">
    
                <h1 class="surtitle">Devis</h1>

                <input type="text" name="devis_last_name" id="devis_last_name" placeholder="Votre nom" required>
                    <input type="text" name="devis_first_name" id="devis_first_name" placeholder="Votre prénom" required>
                    <input type="email" name="devis_email" id="devis_email" placeholder="Votre e-mail" required>
                    <input type="tel" name="devis_tel" id="devis_tel" placeholder="Votre téléphone en tout chiffre" pattern="[0-9]{10}" required />
                    <input type="text" name="devis_company" id="devis_company" placeholder="Nom de l'entreprise (facultatif)">

                    <select name="devis_type_company" id="devis_type_company">
                        <option value="empty">Le type d'entreprise :</option>
                        <option value="particulier">Particulier</option>
                        <option value="company_private">Entreprise privée</option>
                        <option value="company_public">Entreprise public</option>
                        <option value="association">Association</option>
                        <option value="other">Autre</option>

                    </select>
    
                <select name="devis_type_site" id="devis_type_site">
                <option value="empty">Choisissez le type de service : </option>
                <option value="showcase">Site vitrine</option>
                <option value="ecommerce">E-commerce</option>
                <option value="blog">Blog</option>
                <option value="security">Sécurisation de site web</option>
                <option value="webdesign">Webdesign</option>
                <option value="personalize">Site personnalisé</option>
                <option value="other">Autre</option>
            </select>

            <select name="devis_design" id="devis_design">
                <option value="empty">Choisissez le web-designer</option>
                <option value="me">Tim (voir exemple dans la page projet)</option>
                <option value="attractive">Attractive UI (voir exemple dans la page projet)</option>
                <option value="other">Autre</option>
            </select>
            

            <textarea name="devis_message" id="devis_message" cols="30" rows="10" placeholder="Informations complémentaires"></textarea>
    
            <div class="box-check">
                <label for="form_condition">J'ai lu et j'accepte les<a class="link_mention" href="./mentions.html">conditions générales d'utilisation</a></label>
                <input type="checkbox" name="form_condition" id="form_condition" value="oui">
            </div>

            <div class="g-recaptcha" data-sitekey="6LdNbHQpAAAAAJw-p6pLA4rqR66zmIUJtfUoBqBQ"></div>
        <?php

if(isset($errormsg)) {
    echo '<p class="error">'.$errormsg.'</p>';
}

if(isset($successmsg)) {
    echo '<p class="success">'.$successmsg.'</p>';
}



?>
    
            <button class="primary-link" type="submit" class="valid" name="valid">Envoyer formulaire</button>
            
</section>


      <div id="footer"></div>  
        
<script src="../scripts/include.js"></script>
<script src="../scripts/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>